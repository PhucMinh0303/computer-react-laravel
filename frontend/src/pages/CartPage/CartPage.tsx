
import { useState } from 'react';
import { Minus, Plus, Trash2 } from 'lucide-react';
import { formatVnd, getCartItems, saveCartItems, type CartItem } from '../../cart';
import './CartPage.css';

const CartPage = () => {
  const [items, setItems] = useState<CartItem[]>(getCartItems);
  const [showCoupon, setShowCoupon] = useState(false);
  const total = items.reduce((sum, item) => sum + item.price * item.quantity, 0);

  const updateItems = (nextItems: CartItem[]) => {
    saveCartItems(nextItems);
    setItems(nextItems);
  };

  const updateQuantity = (id: string, change: number) => {
    updateItems(
      items.map((item) =>
        item.id === id ? { ...item, quantity: Math.max(1, item.quantity + change) } : item,
      ),
    );
  };

  const removeItem = (id: string) => {
    updateItems(items.filter((item) => item.id !== id));
  };

  if (items.length === 0) {
    return (
      <section className="cart-page" aria-labelledby="cart-empty-title">
        <div className="cart-empty">
          <svg
            className="cart-empty__illustration"
            viewBox="0 0 120 100"
            role="img"
            aria-label="Giỏ hàng trống"
          >
            <defs>
              <linearGradient id="cart-body" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stopColor="#52d95e" />
                <stop offset="100%" stopColor="#a8e9a1" />
              </linearGradient>
              <linearGradient id="cart-handle" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stopColor="#42c952" />
                <stop offset="100%" stopColor="#b6ebb0" />
              </linearGradient>
            </defs>
            <path
              d="M13 13h9l7 47a12 12 0 0 0 12 10h43"
              fill="none"
              stroke="url(#cart-handle)"
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="9"
            />
            <path
              d="M36 28h62l-6 34a10 10 0 0 1-10 8H47a11 11 0 0 1-11-9l-5-26a6 6 0 0 1 5-7Z"
              fill="url(#cart-body)"
            />
            <path
              d="M48 43h14"
              stroke="#fff"
              strokeLinecap="round"
              strokeWidth="6"
              opacity=".8"
            />
            <circle cx="48" cy="82" r="7" fill="#b9e8ad" />
            <circle cx="91" cy="82" r="7" fill="#b9e8ad" />
          </svg>
          <h1 id="cart-empty-title">
            Giỏ hàng của bạn chưa có
            <br />
            sản phẩm nào!
          </h1>
          <p className="cart-empty__support">
            Hỗ trợ: <a href="tel:1900969642">1900 9696 42</a> (08h00 - 21h30)
          </p>
        </div>
      </section>
    );
  }

  return (
    <section className="cart-page cart-page--filled" aria-label="Giỏ hàng">
      <div className="cart-checkout">
        <div className="cart-products">
          {items.map((item) => (
            <article className="cart-product" key={item.id}>
              <img src={item.image} alt={item.name} />
              <div className="cart-product__details">
                <div className="cart-product__top">
                  <div>
                    <h1>{item.name}</h1>
                    <p>{item.variant}</p>
                  </div>
                  <div className="cart-product__price">
                    <strong>{formatVnd(item.price)}</strong>
                  </div>
                </div>
                <div className="cart-product__actions">
                  <button
                    className="cart-remove"
                    type="button"
                    onClick={() => removeItem(item.id)}
                  >
                    <Trash2 size={14} /> Xóa
                  </button>
                  <div className="cart-quantity" aria-label={`Số lượng ${item.name}`}>
                    <button
                      type="button"
                      aria-label="Giảm số lượng"
                      onClick={() => updateQuantity(item.id, -1)}
                    >
                      <Minus size={13} />
                    </button>
                    <span>{item.quantity}</span>
                    <button
                      type="button"
                      aria-label="Tăng số lượng"
                      onClick={() => updateQuantity(item.id, 1)}
                    >
                      <Plus size={13} />
                    </button>
                  </div>
                </div>
              </div>
            </article>
          ))}
          <div className="cart-subtotal">
            <span>Tạm tính ({items.reduce((sum, item) => sum + item.quantity, 0)} sản phẩm):</span>
            <strong>{formatVnd(total)}</strong>
          </div>
        </div>

        <form
          className="cart-form"
          onSubmit={(event) => event.preventDefault()}
        >
          <fieldset>
            <legend>Thông tin khách hàng</legend>
            <div className="cart-radio-row">
              <label><input type="radio" name="customer" defaultChecked /> Anh</label>
              <label><input type="radio" name="customer" /> Chị</label>
            </div>
            <div className="cart-input-row">
              <input aria-label="Họ và tên" placeholder="Họ và Tên" required />
              <input aria-label="Số điện thoại" placeholder="Số điện thoại" inputMode="tel" required />
            </div>
          </fieldset>

          <fieldset>
            <legend>Chọn hình thức nhận hàng</legend>
            <div className="cart-radio-row">
              <label><input type="radio" name="delivery" defaultChecked /> Giao tận nơi</label>
              <label><input type="radio" name="delivery" /> Nhận tại cửa hàng</label>
            </div>
            <div className="cart-address">
              <select aria-label="Tỉnh hoặc thành phố" defaultValue="">
                <option value="" disabled>Thành phố Hồ Chí Minh</option>
                <option>Hà Nội</option>
                <option>Đà Nẵng</option>
              </select>
              <select aria-label="Phường hoặc xã" defaultValue="">
                <option value="" disabled>Chọn Phường / Xã</option>
                <option>Phường Bến Nghé</option>
                <option>Phường Bến Thành</option>
              </select>
              <input aria-label="Địa chỉ" placeholder="Số nhà, tên đường" />
            </div>
          </fieldset>

          <input className="cart-note" placeholder="Nhập ghi chú (nếu có)" />
          <div className="cart-checkboxes">
            <label><input type="checkbox" /> Gọi người khác nhận hàng</label>
            <label><input type="checkbox" /> Hướng dẫn sử dụng, giải đáp thắc mắc sản phẩm</label>
            <label><input type="checkbox" /> Xuất hóa đơn công ty</label>
          </div>
          <button
            className="cart-coupon-toggle"
            type="button"
            aria-expanded={showCoupon}
            onClick={() => setShowCoupon(!showCoupon)}
          >
            Sử dụng mã giảm giá <span aria-hidden="true">⌄</span>
          </button>
          {showCoupon && <input className="cart-coupon-input" placeholder="Nhập mã giảm giá" />}
          <div className="cart-total">
            <span>Tổng tiền:</span>
            <strong>{formatVnd(total)}</strong>
          </div>
          <p className="cart-points">
            <span>Điểm tích lũy Quà Tặng VIP:</span>
            <span>{formatVnd(Math.floor(total * 0.002))}</span>
          </p>
          <button className="cart-submit" type="submit">Đặt hàng</button>
          <p className="cart-payment-note">
            Bạn có thể lựa chọn các hình thức thanh toán ở bước sau
          </p>
        </form>
      </div>
    </section>
  );
};

export default CartPage;