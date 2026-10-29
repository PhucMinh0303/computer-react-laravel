// src/components/TekZone/NewsCard.tsx
import React from 'react';
import type { NewsItem } from '../../types/news';

interface NewsCardProps {
  item: NewsItem;
}

const NewsCard: React.FC<NewsCardProps> = ({ item }) => {
  return (
    <a className="news-card" href={item.link}>
      <div className="news-image-wrapper">
        <img src={item.imageUrl} alt={item.title} className="news-image" />
      </div>
      <div className="news-content">
        <h3 className="news-title">{item.title}</h3>
        <p className="news-time">{item.timeAgo}</p>
      </div>
    </a>
  );
};

export default NewsCard;