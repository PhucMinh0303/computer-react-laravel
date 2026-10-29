import React, { useState } from 'react';
import './HeroSlider.css';
import PHONE_IMAGE_URL from '../../assets/image/main/8396644e4168a90a487b66cb5d38de17.png';

const HeroSlider: React.FC = () => {
  const [currentSlide, setCurrentSlide] = useState(1);
  
  // Giả lập số lượng slide (11 chấm)
  const totalDots = 11;

  return (
    <section className="hero-section">
      <div className="hero-container">
        
        {/* Nút điều hướng Trái */}
        <button className="nav-arrow left-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
            <path d="M15 18l-6-6 6-6"/>
          </svg>
        </button>

        

        {/* Khối Hình ảnh (Giữa) */}
        <div className="hero-image-block">
          <img src={PHONE_IMAGE_URL} alt="iPhone 17 Series" className="phone-img" />
        </div>

        

        {/* Nút điều hướng Phải */}
        <button className="nav-arrow right-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
            <path d="M9 18l6-6-6-6"/>
          </svg>
        </button>
        

      </div>
      <div className="slider-dots">
        {Array.from({ length: totalDots }).map((_, index) => (
          <span 
            key={index} 
            className={`dot ${index === currentSlide ? 'active' : ''}`}
            onClick={() => setCurrentSlide(index)}
          ></span>
        ))}
      </div>
      {/* Dãy chấm điều hướng (Dots) */}
      
    </section>
  );
};

export default HeroSlider;