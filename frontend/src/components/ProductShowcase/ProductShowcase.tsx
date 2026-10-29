import React from 'react';
import './ProductShowcase.css';

// --- Imports Images ---
import IP_Desk_26 from '../../assets/image/product-type/IP_Desk_26.png';
import MACBOOK_AIR_15 from '../../assets/image/product-type/Mac_Desk_25.png';
import IPAD_PRO_11 from '../../assets/image/product-type/Ipad_Desk_25.png';
import APPLE_WATCH_SERIES_9 from '../../assets/image/product-type/Watch_Desk_26.png';
import AIRPODS_3 from '../../assets/image/product-type/Speaker_Desk_25.png';
import CABLE_TYPE_C_20W from '../../assets/image/product-type/Phukien_Desk_25.png';
import APPLE_ICON from '../../assets/image/logo/apple_while_images.png';

// --- Dữ liệu Danh mục ---
const categories = [
  { name: 'iPhone', img: IP_Desk_26 },
  { name: 'Mac', img: MACBOOK_AIR_15 },
  { name: 'iPad', img: IPAD_PRO_11 },
  { name: 'Watch', img: APPLE_WATCH_SERIES_9 },
  { name: 'Tai nghe, loa', img: AIRPODS_3 },
  { name: 'Phụ kiện', img: CABLE_TYPE_C_20W },
];

// --- Dữ liệu Sản phẩm iPhone (Giữ nguyên) ---
const iphoneProducts = [
  { id: 1, name: 'iPhone 18 Pro Max 256GB', price: '41.990.000đ', img: IP_Desk_26 },
  { id: 2, name: 'iPhone 18 Pro 256GB', price: '38.990.000đ', img: IP_Desk_26 },
  { id: 3, name: 'iPhone 18 Pro Max 512GB', price: '48.490.000đ', img: IP_Desk_26 },
  { id: 4, name: 'iPhone 18 Pro 512GB', price: '45.490.000đ', img: IP_Desk_26 },
];

// --- Dữ liệu Sản phẩm Mac (Mới thêm theo hình ảnh) ---
const macProducts = [
  { id: 5, name: 'Macbook Pro 13 inch A19 Pro 8GB/256GB', price: '15.190.000đ', img: MACBOOK_AIR_15 },
  { id: 6, name: 'Macbook Pro 13 inch A19 Pro 16GB/256GB', price: '21.650.000đ', img: MACBOOK_AIR_15 },
  { id: 7, name: 'Macbook Air 13 inch M5 16GB/256GB', price: '35.650.000đ', img: MACBOOK_AIR_15 },
  { id: 8, name: 'Macbook Air 15 inch M5 16GB/512GB', price: '41.390.000đ', img: MACBOOK_AIR_15 },
];

// --- Component con để render từng Section (iPhone, Mac...) ---
// Giúp code gọn hơn và dễ tái sử dụng cho các section sau này
interface ProductSectionProps {
  title: string;
  products: any[];
}

const ProductSection: React.FC<ProductSectionProps> = ({ title, products }) => {
  return (
    <div className="featured-products">
      <h2 className="section-title">
        <div className="apple-icon-white">
          <img src={APPLE_ICON} alt="Apple" />
        </div> {title}
      </h2>

      <div className="product-slider-wrapper">
        {/* Nút Trái */}
        <button className="slider-nav-btn prev-btn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"><path d="M15 18l-6-6 6-6"/></svg>
        </button>

        {/* Danh sách sản phẩm */}
        <div className="product-grid1">
          {products.map((prod) => (
            <div key={prod.id} className="product-card">
              <div className="product-badge">Mới</div>
              <div className="product-img-wrapper">
                <img src={prod.img} alt={prod.name} />
              </div>
              <h3 className="product-name">{prod.name}</h3>
              <p className="product-price">{prod.price}</p>
            </div>
          ))}
        </div>

        {/* Nút Phải */}
        <button className="slider-nav-btn next-btn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>
    </div>
  );
};

const ProductShowcase: React.FC = () => {
  return (
    <section className="showcase-section">
      
      {/* 1. Thanh Danh Mục (Categories) */}
      <div className="category-container">
        {categories.map((cat, index) => (
          <div key={index} className="category-item">
            <div className="cat-img-wrapper">
              <img src={cat.img} alt={cat.name} />
            </div>
            <span className="cat-name">{cat.name}</span>
          </div>
        ))}
      </div>

      {/* 2. Khu vực Sản phẩm iPhone */}
      <ProductSection title="iPhone" products={iphoneProducts} />

      {/* 3. Khu vực Sản phẩm Mac */}
      <ProductSection title="Mac" products={macProducts} />

    </section>
  );
};

export default ProductShowcase;