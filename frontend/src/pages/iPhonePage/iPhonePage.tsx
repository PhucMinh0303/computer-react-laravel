// src/pages/IPhonePage/IPhonePage.tsx
import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import './IPhonePage.css';

// --- Mock Data (Dữ liệu giả lập dựa trên hình) ---
const BANNER_IMAGE = "https://cdn.tgdd.vn/2024/09/banner/iPhone-16-Pro-Max-1200x300-1.jpg"; // Bạn có thể thay bằng ảnh local nếu có

const PRODUCTS = [
  {
    id: 1,
    name: "iPhone 18 Pro Max",
    price: "41.990.000đ",
    oldPrice: null,
    image: "https://cdn.tgdd.vn/Products/Images/42/329143/iphone-16-pro-max-titan-tu-nhien-1-600x600.jpg", // Ảnh minh họa
    storage: ["256GB", "512GB", "1TB", "2TB"],
    isNew: true,
    status: "available"
  },
  {
    id: 2,
    name: "iPhone 18 Pro",
    price: "38.990.000đ",
    oldPrice: null,
    image: "https://cdn.tgdd.vn/Products/Images/42/329134/iphone-16-pro-titan-tu-nhien-1-600x600.jpg", // Ảnh minh họa
    storage: ["256GB", "512GB", "1TB", "2TB"],
    isNew: true,
    status: "available"
  },
  {
    id: 3,
    name: "iPhone 18 Duo",
    price: "64.990.000đ",
    oldPrice: null,
    image: "https://cdn.tgdd.vn/Products/Images/42/329149/iphone-16-pro-max-titan-den-1-600x600.jpg", // Ảnh minh họa (foldable style)
    storage: ["256GB", "512GB", "1TB", "2TB"],
    isNew: true,
    status: "coming_soon"
  }
];

const IPhonePage: React.FC = () => {
  const [activeTab, setActiveTab] = useState("iPhone 18 Series");

  const tabs = [
    "iPhone 18 Series", "iPhone Duo", "iPhone 17 Series", 
    "iPhone Air Series", "iPhone 16 Series", "iPhone 15 Series"
  ];

  return (
    <div className="iphone-page-container">
      <h3>iPhone</h3>
      {/* 1. Banner Section */}
      <div className="banner-section">
        <button className="nav-btn prev">←</button>
        <div className="banner-wrapper">
          {/* Thay src bằng ảnh banner thật của bạn */}
          <img src={BANNER_IMAGE} alt="iPhone Banner" className="banner-img" />
        </div>
        <button className="nav-btn next">→</button>
      </div>

      {/* 2. Filter Section */}
      <div className="filter-section">
        <button className="filter-btn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
          Lọc
        </button>
        
        <div className="filter-tabs">
          {tabs.map((tab) => (
            <button 
              key={tab} 
              className={`tab-btn ${activeTab === tab ? 'active' : ''}`}
              onClick={() => setActiveTab(tab)}
            >
              {tab}
            </button>
          ))}
        </div>
      </div>

      {/* 3. Sort Section */}
      <div className="sort-section">
        <span>Sắp xếp theo:</span>
        <button className="sort-btn active">Nổi bật</button>
        <button className="sort-btn">Bán chạy</button>
        <button className="sort-btn">Giảm giá</button>
        <button className="sort-btn">Mới</button>
        <button className="sort-btn">Giá ↓</button>
      </div>

      {/* 4. Product Grid */}
      <div className="product-grid">
        {PRODUCTS.map((prod) => (
          <Link
            key={prod.id}
            className="product-card"
            to={`/product/${prod.id}`}
            state={{
              name: prod.name,
              price: prod.price,
              image: prod.image,
              storage: prod.storage,
              status: prod.status,
            }}
          >
            {prod.isNew && <span className="badge-new">Mới</span>}
            
            <div className="product-image">
              <img src={prod.image} alt={prod.name} />
            </div>

            <div className="storage-options">
              {prod.storage.map((s) => (
                <span key={s} className="storage-tag">{s}</span>
              ))}
            </div>

            <h3 className="product-name">{prod.name}</h3>
            
            <div className="product-price">
              {prod.price}
            </div>

            {prod.status === 'coming_soon' && (
              <div className="product-status">Hàng sắp về</div>
            )}
          </Link>
        ))}
      </div>
    </div>
  );
};

export default IPhonePage;