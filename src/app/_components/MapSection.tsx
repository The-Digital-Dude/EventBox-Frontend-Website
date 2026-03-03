
import React from 'react';

const MapSection: React.FC = () => {
  return (
    <div className="container mx-auto px-6 max-w-[1280px] pb-24">
      <div className="rounded-[20px] overflow-hidden shadow-sm border border-gray-100 h-[450px]">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6301.2276138238985!2d144.660126!3d-37.845926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad68fbd01a700f7%3A0x92048aa707a3d974!2sEventsBox!5e0!3m2!1sen!2sus!4v1772267808148!5m2!1sen!2sus" 
          width="100%" 
          height="100%" 
          style={{ border:0 }} 
          allowFullScreen={true} 
          loading="lazy" 
          referrerPolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  );
};

export default MapSection;
