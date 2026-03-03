'use client';

import React, { useMemo, useState } from 'react';
import { useRouter } from 'next/navigation';
import { CheckCircle, CreditCard, Lock, ShieldCheck } from 'lucide-react';
import { useCart } from '@/lib/CartContext';

interface PaymentErrors {
  card: string;
  expiry: string;
  cvc: string;
}

const initialErrors: PaymentErrors = { card: '', expiry: '', cvc: '' };

const formatCardNumber = (value: string) => {
  const digitsOnly = value.replace(/\D/g, '').slice(0, 16);
  return digitsOnly.replace(/(\d{4})(?=\d)/g, '$1 ');
};

const formatExpiry = (value: string) => {
  const digitsOnly = value.replace(/\D/g, '').slice(0, 4);
  if (digitsOnly.length < 3) {
    return digitsOnly;
  }
  return `${digitsOnly.slice(0, 2)}/${digitsOnly.slice(2)}`;
};

const PaymentForm: React.FC = () => {
  const router = useRouter();
  const { items, clearCart } = useCart();
  const [isProcessing, setIsProcessing] = useState(false);
  const [isSuccess, setIsSuccess] = useState(false);
  const [cardNumber, setCardNumber] = useState('');
  const [expiryDate, setExpiryDate] = useState('');
  const [cvc, setCvc] = useState('');
  const [errors, setErrors] = useState<PaymentErrors>(initialErrors);

  const { total, selectedCount } = useMemo(() => {
    let subtotal = 0;
    let count = 0;
    items.forEach((item) => {
      item.selectedTickets.forEach((ticket) => {
        subtotal += ticket.price * ticket.quantity;
        count += ticket.quantity;
      });
    });
    const fee = subtotal > 0 ? 1.75 : 0;
    return { total: subtotal + fee, selectedCount: count };
  }, [items]);

  const validateForm = () => {
    const nextErrors: PaymentErrors = { card: '', expiry: '', cvc: '' };
    const cardDigits = cardNumber.replace(/\s/g, '');

    if (cardDigits.length < 16) {
      nextErrors.card = 'Enter a valid 16-digit card number';
    }

    const [month, year] = expiryDate.split('/');
    const parsedMonth = Number(month);
    const parsedYear = Number(year);
    const now = new Date();
    const currentYear = now.getFullYear() % 100;
    const currentMonth = now.getMonth() + 1;

    if (!month || !year || month.length !== 2 || year.length !== 2) {
      nextErrors.expiry = 'Enter expiry in MM/YY format';
    } else if (parsedMonth < 1 || parsedMonth > 12) {
      nextErrors.expiry = 'Expiry month must be between 01 and 12';
    } else if (
      parsedYear < currentYear ||
      (parsedYear === currentYear && parsedMonth < currentMonth)
    ) {
      nextErrors.expiry = 'Card appears to be expired';
    }

    if (!/^\d{3,4}$/.test(cvc)) {
      nextErrors.cvc = 'CVC must be 3 or 4 digits';
    }

    setErrors(nextErrors);
    return !Object.values(nextErrors).some(Boolean);
  };

  const handleSubmit = (event: React.FormEvent<HTMLFormElement>) => {
    event.preventDefault();
    if (selectedCount === 0 || !validateForm()) {
      return;
    }

    setIsProcessing(true);
    window.setTimeout(() => {
      setIsProcessing(false);
      setIsSuccess(true);
      clearCart();
      window.setTimeout(() => {
        router.push('/upcoming-events');
      }, 1600);
    }, 1600);
  };

  if (isSuccess) {
    return (
      <div className="bg-green-50 border border-green-200 rounded-xl p-6 text-center">
        <div className="mx-auto mb-3 size-12 rounded-full bg-green-100 text-green-700 flex items-center justify-center">
          <CheckCircle className="w-7 h-7" />
        </div>
        <h3 className="text-lg font-black text-green-800 mb-1">Payment Successful</h3>
        <p className="text-sm text-green-700">Your booking is confirmed. Redirecting to events...</p>
      </div>
    );
  }

  return (
    <form onSubmit={handleSubmit} className="space-y-4">
      <h3 className="text-xs font-bold text-secondary uppercase tracking-wider flex items-center gap-2">
        <CreditCard className="w-4 h-4 text-primary" />
        Payment Method
      </h3>
      <div className="bg-gray-50/50 p-4 rounded-xl border border-gray-100 space-y-4">
        <div className="space-y-1.5">
          <label htmlFor="card_number" className="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">Card Number</label>
          <div className="relative">
            <input
              id="card_number"
              name="card_number"
              type="text"
              autoComplete="cc-number"
              inputMode="numeric"
              value={cardNumber}
              onChange={(event) => {
                setCardNumber(formatCardNumber(event.target.value));
                if (errors.card) {
                  setErrors((prev) => ({ ...prev, card: '' }));
                }
              }}
              placeholder="0000 0000 0000 0000"
              className="w-full bg-white border border-gray-200 rounded-md px-3 py-2.5 pl-9 text-xs focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none font-medium font-mono text-secondary"
            />
            <CreditCard className="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" />
          </div>
          {errors.card && <p className="text-red-500 text-xs mt-1">{errors.card}</p>}
        </div>
        <div className="grid grid-cols-2 gap-3">
          <div className="space-y-1.5">
            <label htmlFor="expiry_date" className="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">Expiry Date</label>
            <input
              id="expiry_date"
              name="expiry_date"
              type="text"
              autoComplete="cc-exp"
              inputMode="numeric"
              value={expiryDate}
              onChange={(event) => {
                setExpiryDate(formatExpiry(event.target.value));
                if (errors.expiry) {
                  setErrors((prev) => ({ ...prev, expiry: '' }));
                }
              }}
              placeholder="MM/YY"
              className="w-full bg-white border border-gray-200 rounded-md px-3 py-2.5 text-xs focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none font-medium font-mono text-center text-secondary"
            />
            {errors.expiry && <p className="text-red-500 text-xs mt-1">{errors.expiry}</p>}
          </div>
          <div className="space-y-1.5">
            <label htmlFor="cvc" className="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">CVC</label>
            <input
              id="cvc"
              name="cvc"
              type="text"
              autoComplete="cc-csc"
              inputMode="numeric"
              value={cvc}
              onChange={(event) => {
                const nextCvc = event.target.value.replace(/\D/g, '').slice(0, 4);
                setCvc(nextCvc);
                if (errors.cvc) {
                  setErrors((prev) => ({ ...prev, cvc: '' }));
                }
              }}
              placeholder="123"
              className="w-full bg-white border border-gray-200 rounded-md px-3 py-2.5 text-xs focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none font-medium font-mono text-center text-secondary"
            />
            {errors.cvc && <p className="text-red-500 text-xs mt-1">{errors.cvc}</p>}
          </div>
        </div>
      </div>
      <button
        type="submit"
        disabled={isProcessing || selectedCount === 0}
        className="w-full bg-primary text-white py-3.5 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-secondary transition-all shadow-md shadow-primary/20 flex items-center justify-center gap-2 group mt-6 disabled:opacity-60 disabled:cursor-not-allowed"
      >
        {isProcessing ? 'Processing...' : selectedCount === 0 ? 'Select Tickets First' : `Complete Payment ($${total.toFixed(2)})`}
        {!isProcessing && selectedCount > 0 && <CheckCircle className="w-4 h-4 ml-1" />}
      </button>
      <div className="flex items-center justify-center gap-4 pt-4 opacity-50 grayscale">
        <div className="flex items-center gap-1.5 text-[9px] font-bold uppercase tracking-widest text-gray-500">
          <Lock className="w-3.5 h-3.5" />
          SSL Secure
        </div>
        <div className="flex items-center gap-1.5 text-[9px] font-bold uppercase tracking-widest text-gray-500">
          <ShieldCheck className="w-3.5 h-3.5" />
          Verified
        </div>
      </div>
    </form>
  );
};

export default PaymentForm;
