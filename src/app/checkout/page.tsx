
import BillingDetailsForm from "../_components/BillingDetailsForm";
import CheckoutOrderSummary from "../_components/CheckoutOrderSummary";
import PaymentForm from "../_components/PaymentForm";
import Link from "next/link";
import { Check, ChevronRight } from "lucide-react";

export default function CheckoutPage() {
  return (
    <div className="bg-gray-50 min-h-screen py-8 md:py-12">
      <div className="container mx-auto px-4 md:px-6 max-w-5xl">
        <div className="mb-6 md:mb-8 bg-white rounded-xl border border-gray-100 shadow-sm p-4 md:p-5">
          <div className="flex items-center justify-between gap-2 text-[10px] md:text-xs font-bold uppercase tracking-wider text-gray-500">
            <div className="flex items-center gap-2">
              <span className="size-6 md:size-7 rounded-full bg-green-100 text-green-700 flex items-center justify-center border border-green-200">
                <Check className="w-3.5 h-3.5" />
              </span>
              <Link href="/cart" className="hover:text-primary transition-colors">Cart</Link>
            </div>
            <ChevronRight className="w-4 h-4 text-gray-300" />
            <div className="flex items-center gap-2">
              <span className="size-6 md:size-7 rounded-full bg-primary/10 text-primary flex items-center justify-center border border-primary/20">
                2
              </span>
              <span className="text-secondary">Details</span>
            </div>
            <ChevronRight className="w-4 h-4 text-gray-300" />
            <div className="flex items-center gap-2">
              <span className="size-6 md:size-7 rounded-full bg-primary text-white flex items-center justify-center">
                3
              </span>
              <span className="text-secondary">Payment</span>
            </div>
          </div>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10">
          <div className="lg:col-span-7 space-y-6 animate-fade-in-up">
            <h1 className="text-2xl font-black text-secondary flex items-center gap-3">
              <span className="w-1.5 h-6 bg-primary rounded-full"></span>
              Secure Checkout
            </h1>
            <BillingDetailsForm />
          </div>
          <div className="lg:col-span-5 animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
            <div className="sticky top-32 space-y-6">
              <CheckoutOrderSummary />
              <PaymentForm />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
