// src/components/TekZone/TekZone.tsx
import React from 'react';
import NewsCard from './NewsCard';
import type { NewsItem } from '../../types/news';
import './TekZone.css';

// Dữ liệu giả lập (Mock Data) dựa trên hình ảnh
const MOCK_DATA: NewsItem[] = [
  {
    id: 1,
    title: "Code Survive Homelander 10/2026 mới nhất, cách nhập code trong game",
    imageUrl: "../../assets/image/TekZone/code-cach-nhap-code-survive-homelander-thumb639165276956424368.jpg", // Thay bằng link ảnh thật của bạn
    timeAgo: "11 giờ trước",
    link: "#",
  },
  {
    id: 2,
    title: "Code Grow a Chicken Fighter tháng 10/2026 mới nhất, cách nhập code",
    imageUrl: "../../assets/image/TekZone/code-cach-nhap-code-survive-homelander-thumb639165276956424368.jpg", // Thay bằng link ảnh thật của bạn
    timeAgo: "11 giờ trước",
    link: "#",
  },
  {
    id: 3,
    title: "Code FC Mobile Việt Nam 26 ngày 26/10/2026 mới nhất cập nhật liên tục, cách nhập code FC Mobile",
    imageUrl: "../../assets/image/TekZone/code-cach-nhap-code-survive-homelander-thumb639165276956424368.jpg", // Thay bằng link ảnh thật của bạn
    timeAgo: "11 giờ trước",
    link: "#",
  }
];

const TekZone: React.FC = () => {
  return (
    <section className="tekzone-section" id="tekzone">
      <h2 className="tekzone-heading">TekZone</h2>
      
      <div className="tekzone-container">
        {/* Nút Previous */}
        <button className="nav-btn prev-btn" aria-label="Previous articles">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>

        {/* Danh sách tin tức */}
        <div className="news-grid">
          {MOCK_DATA.map((news) => (
            <NewsCard key={news.id} item={news} />
          ))}
        </div>

        {/* Nút Next */}
        <button className="nav-btn next-btn" aria-label="Next articles">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
      </div>
    </section>
  );
};

export default TekZone;