// src/App.tsx
import React from 'react';
import { Routes, Route } from 'react-router-dom';
import './App.css';

import MainLayout from './components/header&footer/MainLayout';

import HeroSlider from './components/HeroSlider/HeroSlider';
import ProductShowcase from './components/ProductShowcase/ProductShowcase';
import TekZone from './components/TekZone/TekZone';

// Pages
import IPhonePage from './pages/iPhonePage/iPhonePage';
import MacPage from './pages/MacPage/MacPage';
import IPadPage from './pages/iPadPage/iPadPage';
import WatchPage from './pages/WatchPage/WatchPage';
import AirPodsPage from './pages/AirPodsPage/AirPodsPage';
import AccessoryPage from './pages/AccessoryPage/AccessoryPage';
import TekZonePage from './pages/TekZonePage/TekZonePage';
import ProductDetailPage from './pages/ProductDetailPage/ProductDetailPage';


const HomePage: React.FC = () => (
  <>
    <HeroSlider />
    <ProductShowcase />
    <TekZone />
  </>
);


const App: React.FC = () => {
  return (
    <Routes>
      {/* MainLayout bao gồm Header + Footer + Outlet */}
      <Route element={<MainLayout />}>
        {/* Trang chủ: HeroSlider + ProductShowcase + TekZone */}
        <Route path="/" element={<HomePage />} />

        {/* Các route con tương ứng với từng page */}
        <Route path="/iphone" element={<IPhonePage />} />
        <Route path="/mac" element={<MacPage />} />
        <Route path="/ipad" element={<IPadPage />} />
        <Route path="/watch" element={<WatchPage />} />
        <Route path="/tai-nghe" element={<AirPodsPage />} />
        <Route path="/phu-kien" element={<AccessoryPage />} />
        <Route path="/tekzone" element={<TekZonePage />} />
        <Route path="/product/:id" element={<ProductDetailPage />} />

        {/* 404 - fallback */}
        <Route path="*" element={<div>404 - Không tìm thấy trang</div>} />
      </Route>
    </Routes>
  );
};

export default App;