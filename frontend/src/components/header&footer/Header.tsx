// src/components/header&footer/Header.tsx
import React from 'react';
import { Link } from 'react-router-dom';
import './Header.css';
import LOGO_IMAGE_URL from '../../assets/image/logo/logo_topzone.png';
import APPLE_ICON_URL from '../../assets/image/logo/APR_logo.png';

const SearchIcon = () => (
  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
  </svg>
);

const CartIcon = () => (
  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path>
  </svg>
);

const Header: React.FC = () => {
  return (
    <header className="header">
      <div className="header-container">
        <div className="logo-section">
          <Link to="/" className="logo">
            <img src={LOGO_IMAGE_URL} alt="Topzone Logo" />
          </Link>
          <div className="logo">
            <img src={APPLE_ICON_URL} alt="Apple Icon" />
          </div>
        </div>

        <nav className="main-nav">
          <ul>
            <li><Link to="/iphone">iPhone</Link></li>
            <li><Link to="/mac">Mac</Link></li>
            <li><Link to="/ipad">iPad</Link></li>
            <li><Link to="/watch">Watch</Link></li>
            <li><Link to="/tai-nghe">Tai nghe, Loa</Link></li>
            <li><Link to="/phu-kien">Phụ kiện</Link></li>
            <li><Link to="/tekzone">TekZone</Link></li>
            <li><Link to="/topcare">TopCare</Link></li>
          </ul>
        </nav>

        <div className="header-actions">
          <div className="icon-btn"><SearchIcon /></div>
          <div className="icon-btn"><CartIcon /></div>
        </div>
      </div>
    </header>
  );
};

export default Header;