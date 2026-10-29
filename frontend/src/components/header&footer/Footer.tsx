import React from 'react';
import './Footer.css';
import LOGO_IMAGE_URL from '../../assets/image/logo/logo_topzone.png';
import APPLE_ICON_URL from '../../assets/image/logo/APR_logo.png';

const Footer: React.FC = () => {
  return (
    <div className="footer-wrapper">
      {/* Phần 1: Tính năng nổi bật */}
      <div className="feature-bar">
        <div className="container feature-container">
          <div className="feature-item">
            <div className="icon-circle">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            </div>
            <p>Mẫu mã đa dạng,<br/>chính hãng</p>
          </div>
          <div className="feature-item">
            <div className="icon-circle">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
            </div>
            <p>Giao hàng toàn quốc</p>
          </div>
          <div className="feature-item">
            <div className="icon-circle">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <p>Bảo hành có cam kết<br/>tới 12 tháng</p>
          </div>
          <div className="feature-item">
            <div className="icon-circle">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg>
            </div>
            <p>Có thể đổi trả tại<br/>Thegioididong và DienmayXANH</p>
          </div>
        </div>
      </div>

      {/* Phần 2: Main Footer */}
      <footer className="main-footer">
        <div className="container">
          <div className="footer-top">
            {/* Cột 1: Logo & Contact */}
            <div className="footer-col col-contact">
              <div className="logo-area">
                <div className="logo">
                  <img src={LOGO_IMAGE_URL} alt="Topzone Logo" />
                </div>
                <div className="logo">
                  <img src={APPLE_ICON_URL} alt="Apple Icon" />
                </div>
              </div>
              
              <div className="contact-info">
                <p className="title">Tổng đài</p>
                <p>Mua hàng: <a href="tel:1900969642">1900.9696.42</a> (8:00 - 21:30)</p>
                <p>Khiếu nại: <a href="tel:1900986843">1900.9868.43</a> (8:00 - 21:30)</p>
              </div>

              <div className="social-connect">
                <p>Kết nối với chúng tôi</p>
                <div className="social-icons">
                  <a href="#" className="social-btn fb">f</a>
                  <a href="#" className="social-btn yt">▶</a>
                  <a href="#" className="social-btn zalo">Zalo</a>
                </div>
              </div>
            </div>

            {/* Cột 2 */}
            <div className="footer-col">
              <h3>Hệ thống cửa hàng</h3>
              <ul>
                <li><a href="#">Xem 86 cửa hàng</a></li>
                <li><a href="#">Nội quy cửa hàng</a></li>
                <li><a href="#">Chất lượng phục vụ</a></li>
                <li><a href="#">Chính sách bảo hành & đổi trả</a></li>
              </ul>
            </div>

            {/* Cột 3 */}
            <div className="footer-col">
              <h3>Hỗ trợ khách hàng</h3>
              <ul>
                <li><a href="#">Điều kiện giao dịch chung</a></li>
                <li><a href="#">Hướng dẫn mua hàng online</a></li>
                <li><a href="#">Chính sách giao hàng</a></li>
                <li><a href="#">Hướng dẫn thanh toán</a></li>
              </ul>
            </div>

            {/* Cột 4 */}
            <div className="footer-col">
              <h3>Về thương hiệu TopZone</h3>
              <ul>
                <li><a href="#">Tích điểm Quà tặng VIP</a></li>
                <li><a href="#">Giới thiệu TopZone</a></li>
                <li><a href="#">Bán hàng doanh nghiệp</a></li>
                <li><a href="#">Chính sách xử lý dữ liệu cá nhân</a></li>
              </ul>
            </div>

            {/* Cột 5 */}
            <div className="footer-col">
              <h3>Trung tâm bảo hành TopCare</h3>
              <ul>
                <li><a href="#">Giới thiệu TopCare</a></li>
              </ul>
            </div>
          </div>

          {/* Phần Bottom: Copyright & Certifications */}
          <div className="footer-bottom">
            <div className="copyright-text">
              <p>© 2018. Công Ty Cổ Phần Đầu Tư Điện Máy Xanh. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007.</p>
              <p>Địa chỉ: 128 Trần Quang Khải, P.Tân Định, TP. Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ: Lô T2-1.2, Đường D1, P.Tân Nhơn Phú, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: hotromtd@thegioididong.com.</p>
            </div>
            <div className="certifications">
              <a href="#" className="cert-badge">
                <span className="icon-check">✓</span> ĐÃ THÔNG BÁO<br/><small>BỘ CÔNG THƯƠNG</small>
              </a>
              <a href="#" className="cert-badge dmca">DMCA PROTECTED</a>
            </div>
          </div>
        </div>
      </footer>

      {/* Phần 3: MWG Footer */}
      <div className="mwg-footer">
        <p>Ghé thăm các website khác cùng tập đoàn MWG</p>
        <div className="mwg-logos">
            {/* Giả lập các logo bằng text/màu sắc để code chạy được ngay */}
            <div className="mwg-item bg-black">thegioididong</div>
            <div className="mwg-item bg-blue">Điện máy XANH</div>
            <div className="mwg-item bg-green">Bách hóa XANH</div>
            <div className="mwg-item bg-light-green">NHÀ THUỐC AN KHANG</div>
            <div className="mwg-item bg-pink">AVAKids</div>
            <div className="mwg-item bg-yellow">VIỆC LÀM</div>
            <div className="mwg-item bg-orange">erablue</div>
            <div className="mwg-item bg-blue">TopZone</div>
        </div>
      </div>
      
      {/* Nút Chat nổi */}
      <div className="floating-chat">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
      </div>
    </div>
  );
};

export default Footer;