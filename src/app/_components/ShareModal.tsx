
'use client';

import React, { useState, useEffect, useRef } from 'react';
import { X, Facebook, MessageCircle, Phone, Twitter, Linkedin, Mail, Copy } from 'lucide-react';

const shareOptions = [
  { name: 'Facebook', icon: <Facebook className="w-6 h-6" />, color: '#1877F2', platform: 'facebook' },
  { name: 'Messenger', icon: <MessageCircle className="w-6 h-6" />, color: '#00B2FF', platform: 'messenger' },
  { name: 'WhatsApp', icon: <Phone className="w-6 h-6" />, color: '#25D366', platform: 'whatsapp' },
  { name: 'X (Twitter)', icon: <Twitter className="w-6 h-6" />, color: '#000000', platform: 'x' },
  { name: 'LinkedIn', icon: <Linkedin className="w-6 h-6" />, color: '#0A66C2', platform: 'linkedin' },
  { name: 'Email', icon: <Mail className="w-6 h-6" />, color: '#7f8c8d', platform: 'email' },
];

interface ShareModalProps {
  isOpen: boolean;
  onClose: () => void;
}

const ShareModal: React.FC<ShareModalProps> = ({ isOpen, onClose }) => {
  const [copied, setCopied] = useState(false);
  const closeButtonRef = useRef<HTMLButtonElement | null>(null);
  const previousActiveRef = useRef<HTMLElement | null>(null);

  useEffect(() => {
    const handleKeyDown = (e: KeyboardEvent) => {
      if (e.key === 'Escape') onClose();
    };
    window.addEventListener('keydown', handleKeyDown);
    return () => window.removeEventListener('keydown', handleKeyDown);
  }, [onClose]);

  useEffect(() => {
    if (!isOpen) return;
    document.body.classList.add('overflow-hidden');
    previousActiveRef.current = document.activeElement as HTMLElement | null;
    setTimeout(() => closeButtonRef.current?.focus(), 0);
    return () => {
      document.body.classList.remove('overflow-hidden');
      previousActiveRef.current?.focus();
    };
  }, [isOpen]);

  const handleCopy = () => {
    navigator.clipboard.writeText(window.location.href);
    setCopied(true);
    setTimeout(() => setCopied(false), 2000);
  };

  if (!isOpen) return null;

  type ShareCircleStyle = React.CSSProperties & { '--share-color': string };

  const handleShare = (platform: string) => {
    const eventUrl = window.location.href;
    const eventText = 'Check out this event!';
    let url = '';

    switch(platform) {
      case 'facebook':
        url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(eventUrl)}`;
        break;
      case 'messenger':
        url = `fb-messenger://share/?link=${encodeURIComponent(eventUrl)}`;
        break;
      case 'whatsapp':
        url = `https://api.whatsapp.com/send?text=${encodeURIComponent(eventText + ' ' + eventUrl)}`;
        break;
      case 'x':
        url = `https://twitter.com/intent/tweet?url=${encodeURIComponent(eventUrl)}&text=${encodeURIComponent(eventText)}`;
        break;
      case 'linkedin':
        url = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(eventUrl)}`;
        break;
      case 'email':
        url = `mailto:?subject=${encodeURIComponent(eventText)}&body=${encodeURIComponent('Check it out here: ' + eventUrl)}`;
        break;
    }

    if (url) {
      window.open(url, '_blank', 'width=600,height=400');
    }
  }

  return (
    <div className="fixed inset-0 z-[100] flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="share-modal-title" aria-describedby="share-modal-desc">
      <div className="absolute inset-0 bg-black/60 backdrop-blur-sm" onClick={onClose}></div>
      <div className="relative w-full max-w-md bg-white rounded-[20px] shadow-2xl overflow-hidden animate-fade-in-up">
        <div className="p-6 border-b border-gray-100 flex items-center justify-between">
          <h3 id="share-modal-title" className="text-xl font-black text-secondary">Share Event</h3>
          <button ref={closeButtonRef} onClick={onClose} className="text-gray-400 hover:text-secondary transition-colors" aria-label="Close share dialog">
            <X className="w-6 h-6" />
          </button>
        </div>
        <div className="p-6">
          <p id="share-modal-desc" className="text-gray-500 text-sm mb-6 font-medium">Share this amazing event with your friends and family!</p>
          <div className="grid grid-cols-3 gap-4 mb-8">
            {shareOptions.map(option => (
              <button key={option.name} onClick={() => handleShare(option.platform)} className="flex flex-col items-center gap-2 group">
                <div
                  style={{ backgroundColor: `${option.color}1A`, color: option.color, '--share-color': option.color } as ShareCircleStyle}
                  className="size-14 rounded-full flex items-center justify-center group-hover:bg-[var(--share-color)] group-hover:text-white transition-all shadow-inner"
                >
                  {option.icon}
                </div>
                <span className="text-[10px] font-black uppercase text-gray-500 tracking-wider">{option.name}</span>
              </button>
            ))}
          </div>
          <div className="bg-slate-50 border border-gray-100 rounded-[10px] p-2 flex items-center gap-2">
            <input type="text" readOnly value={typeof window !== 'undefined' ? window.location.href : ''} className="bg-transparent border-none focus:ring-0 text-gray-600 text-xs font-medium flex-1 px-2" />
            <button onClick={handleCopy} className="bg-secondary text-white px-4 py-2 rounded-[8px] font-black text-[10px] uppercase tracking-wider hover:bg-primary transition-all flex items-center gap-2">
              <Copy className="w-3 h-3" />
              {copied ? 'Copied!' : 'Copy Link'}
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};

export default ShareModal;
