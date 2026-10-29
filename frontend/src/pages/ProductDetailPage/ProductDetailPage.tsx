
import { useState } from 'react';
import { useLocation } from 'react-router-dom';
import {
  ChevronDown,
  ChevronLeft,
  ChevronRight,
  Clock3,
  CreditCard,
  MapPin,
  PackageCheck,
  Phone,
  RefreshCcw,
  Truck,
  Watch,
} from 'lucide-react';
import './ProductDetailPage.css';

const galleryImages = [
  {
    src: 'https://cdn.tgdd.vn/Products/Images/42/329143/iphone-16-pro-max-titan-tu-nhien-1-600x600.jpg',
    alt: 'Mặt lưng iPhone',
  },
  {
    src: 'https://cdn.tgdd.vn/Products/Images/42/329134/iphone-16-pro-titan-tu-nhien-1-600x600.jpg',
    alt: 'Mặt trước iPhone',
  },
  {
    src: 'https://cdn.tgdd.vn/Products/Images/42/329149/iphone-16-pro-max-titan-den-1-600x600.jpg',
    alt: 'Cận cảnh iPhone',
  },
  {
    src: 'https://cdn.tgdd.vn/Products/Images/42/329143/iphone-16-pro-max-titan-tu-nhien-1-600x600.jpg',
    alt: 'Camera iPhone',
  },
  {
    src: 'https://cdn.tgdd.vn/Products/Images/42/329143/iphone-16-pro-max-titan-tu-nhien-1-600x600.jpg',
    alt: 'iPhone trên tay',
  },
  {
    src: 'https://cdn.tgdd.vn/Products/Images/42/329134/iphone-16-pro-titan-tu-nhien-1-600x600.jpg',
    alt: 'Thông số sản phẩm',
  },
];

const storageOptions = ['256GB', '512GB', '1TB', '2TB'];
const colorOptions = [
  { name: 'Đỏ Burgundy', value: '#9e0034' },
  { name: 'Titan xanh', value: '#aebbd0' },
  { name: 'Titan trắng', value: '#d8d8d8' },
  { name: 'Titan đen', value: '#050505' },
];

const promotions = [
  'Phiếu mua hàng Apple Watch (trừ Watch SE) trị giá 1,000,000đ',
  'Phiếu mua hàng Macbook Air, Macbook Pro trị giá 1,000,000đ',
  'Phiếu mua hàng Apple Watch SE trị giá 500,000đ',
  'Phiếu mua hàng Macbook Neo trị giá 500,000đ',
  'Phiếu mua hàng sim data trị giá 500,000đ',
  'Phiếu mua hàng AirPods trị giá 300,000đ',
  'Ưu đãi thu cũ đổi mới lên đến 2,000,000đ',
  'Tặng gói bảo hành mở rộng khi mua kèm',
];

const specificationGroups = [
  {
    title: 'Cấu hình & Bộ nhớ',
    rows: [
      ['Hệ điều hành:', 'Android 15 Go'],
      ['Chip xử lý (CPU):', 'Unisoc T7250 8 nhân'],
      ['Tốc độ CPU:', '2 nhân 1.8 GHz & 6 nhân 1.6 GHz'],
      ['Chip đồ họa (GPU):', 'Mali-G57'],
      ['RAM:', '4 GB'],
      ['Dung lượng lưu trữ:', '64 GB'],
      ['Dung lượng còn lại (khả dụng) khoảng:', '48'],
      ['Thẻ nhớ:', 'MicroSD'],
      ['Danh bạ:', 'Không giới hạn'],
    ],
  },
  {
    title: 'Camera & Màn hình',
    rows: [
      ['Camera sau:', 'Đang cập nhật'],
      ['Camera trước:', 'Đang cập nhật'],
      ['Công nghệ màn hình:', 'Đang cập nhật'],
      ['Độ phân giải màn hình:', 'Đang cập nhật'],
    ],
  },
  {
    title: 'Pin & Sạc',
    rows: [
      ['Dung lượng pin:', 'Đang cập nhật'],
      ['Hỗ trợ sạc tối đa:', 'Đang cập nhật'],
    ],
  },
  {
    title: 'Tiện ích',
    rows: [
      ['Bảo mật:', 'Đang cập nhật'],
      ['Tính năng đặc biệt:', 'Đang cập nhật'],
    ],
  },
  {
    title: 'Kết nối',
    rows: [
      ['Mạng di động:', 'Đang cập nhật'],
      ['Wi-Fi:', 'Đang cập nhật'],
      ['Bluetooth:', 'Đang cập nhật'],
      ['Cổng kết nối:', 'Đang cập nhật'],
    ],
  },
  {
    title: 'Thiết kế & Chất liệu',
    rows: [
      ['Thiết kế:', 'Đang cập nhật'],
      ['Chất liệu:', 'Đang cập nhật'],
      ['Kích thước, khối lượng:', 'Đang cập nhật'],
    ],
  },
];

interface ProductDetailRouteState {
  name: string;
  price: string;
  image: string;
  storage?: string[];
  status?: string;
}

const ProductDetailPage = () => {
  const { state } = useLocation();
  const product = state as ProductDetailRouteState | null;
  const productGallery = [
    { ...galleryImages[0], src: product?.image ?? galleryImages[0].src },
    ...galleryImages.slice(1),
  ];
  const [selectedImage, setSelectedImage] = useState(0);
  const [selectedStorage, setSelectedStorage] = useState(
    product?.storage?.[0] ?? storageOptions[0],
  );
  const [selectedColor, setSelectedColor] = useState(colorOptions[0].name);
  const [showAllPromotions, setShowAllPromotions] = useState(false);
  const [selectedSpecsTab, setSelectedSpecsTab] = useState<'specifications' | 'product-info'>(
    'specifications',
  );
  const [openSpecificationGroup, setOpenSpecificationGroup] = useState<number | null>(0);
  const productName = product?.name ?? 'iPhone 18 Pro Max';
  const productTitle = product
    ? product.storage
      ? `${productName} ${selectedStorage}`
      : productName
    : `${productName} 256GB`;

  return (
    <main className="product-detail-page">
      <section className="product-detail-layout" aria-label="Thông tin sản phẩm">
        <div className="product-gallery">
          <div className="product-main-image">
            <button
              className="gallery-arrow gallery-arrow--left"
              type="button"
              aria-label="Ảnh trước"
              onClick={() =>
                setSelectedImage((selectedImage - 1 + galleryImages.length) % galleryImages.length)
              }
            >
              <ChevronLeft size={20} />
            </button>
            <img
              className="product-hero-image"
              src={productGallery[selectedImage].src}
              alt={productGallery[selectedImage].alt}
            />
            <button
              className="gallery-arrow gallery-arrow--right"
              type="button"
              aria-label="Ảnh tiếp theo"
              onClick={() => setSelectedImage((selectedImage + 1) % galleryImages.length)}
            >
              <ChevronRight size={20} />
            </button>
          </div>
          <div className="product-thumbnails" aria-label="Ảnh sản phẩm">
            {productGallery.map((image, index) => (
              <button
                className={`product-thumbnail${selectedImage === index ? ' is-selected' : ''}`}
                key={`${image.alt}-${index}`}
                type="button"
                aria-label={`Xem ${image.alt}`}
                aria-pressed={selectedImage === index}
                onClick={() => setSelectedImage(index)}
              >
                <img src={image.src} alt="" />
              </button>
            ))}
            <button
              className="thumbnail-next"
              type="button"
              aria-label="Xem thêm ảnh"
              onClick={() => setSelectedImage((selectedImage + 1) % galleryImages.length)}
            >
              <ChevronRight size={22} />
            </button>
          </div>
        </div>

        <div className="product-information">
          <div className="product-heading">
            <h1>{productTitle}</h1>
            <span className="product-new-badge">Mới</span>
          </div>
          <button className="delivery-location" type="button">
            Giá và khuyến mãi tại: Thành phố Hồ Chí Minh <ChevronDown size={14} />
          </button>
          <p className="product-detail-price">{product?.price ?? '41.990.000đ'}</p>
          {product?.status === 'coming_soon' && (
            <p className="product-availability">Hàng sắp về</p>
          )}
          <div className="loyalty-points">
            <span className="loyalty-star">★</span>
            <span>+83.980 điểm tích lũy Quà Tặng VIP</span>
            <span className="loyalty-info">?</span>
          </div>

          <div className="product-option">
            <span className="option-label">Dung lượng</span>
            <div className="storage-selector">
              {(product?.storage ?? storageOptions).map((storage) => (
                <button
                  className={`storage-option${selectedStorage === storage ? ' is-selected' : ''}`}
                  key={storage}
                  type="button"
                  aria-pressed={selectedStorage === storage}
                  onClick={() => setSelectedStorage(storage)}
                >
                  {storage}
                </button>
              ))}
            </div>
          </div>

          <div className="product-option color-option">
            <span className="option-label">Màu: {selectedColor}</span>
            <div className="color-selector">
              {colorOptions.map((color) => (
                <button
                  className={`color-swatch${selectedColor === color.name ? ' is-selected' : ''}`}
                  key={color.name}
                  type="button"
                  title={color.name}
                  aria-label={color.name}
                  aria-pressed={selectedColor === color.name}
                  style={{ backgroundColor: color.value }}
                  onClick={() => setSelectedColor(color.name)}
                />
              ))}
            </div>
          </div>

          <section className="promotion-card">
            <h2>Khuyến mãi</h2>
            <p className="promotion-caption">
              Giá và khuyến mãi dự kiến áp dụng đến 23:59 | 31/10
            </p>
            <ul>
              {promotions.slice(0, showAllPromotions ? promotions.length : 6).map((promotion) => (
                <li key={promotion}>{promotion}</li>
              ))}
            </ul>
            <button
              className="show-promotions"
              type="button"
              onClick={() => setShowAllPromotions(!showAllPromotions)}
            >
              {showAllPromotions ? 'Thu gọn' : 'Xem thêm 2 khuyến mãi'}
              <ChevronDown size={13} className={showAllPromotions ? 'is-rotated' : ''} />
            </button>
          </section>

          <button className="tekzone-stock" type="button">
            <PackageCheck size={17} />
            Xem TopZone có hàng <ChevronRight size={15} />
          </button>

          <section className="payment-offers">
            <h2>Ưu đãi thanh toán Online <small>(Click chọn để áp dụng)</small></h2>
            <div className="payment-offer">
              <span className="offer-radio" />
              <span className="bank-logo bank-logo--yellow">VISA BANK</span>
              <p>Trả thẳng giảm 1.000.000đ <a href="#payment-details">Xem chi tiết</a></p>
              <small>Thanh toán đơn từ 10.000.000đ</small>
            </div>
            <div className="payment-offer">
              <span className="offer-radio" />
              <span className="bank-logo">LPBank</span>
              <p>Trả thẳng giảm 600.000đ <a href="#payment-details">Xem chi tiết</a></p>
              <small>Thanh toán đơn từ 8.000.000đ</small>
            </div>
            <button className="more-payment-offers" type="button">
              Xem thêm 2 ưu đãi thanh toán <ChevronDown size={13} />
            </button>
          </section>

          <div className="purchase-actions">
            <button className="buy-now-button" type="button">Mua ngay</button>
            <button className="installment-button" type="button">
              <strong>Mua trả chậm 0% ›</strong>
              <span>Qua thẻ tín dụng, thẻ tài chính, mua trước trả sau</span>
            </button>
          </div>

          <ul className="service-benefits">
            <li>
              <RefreshCcw size={16} />
              <span>Hư gì đổi nấy 12 tháng tại 3068 siêu thị trên toàn quốc <a href="#warranty">Xem chi tiết chính sách bảo hành, đổi trả</a></span>
            </li>
            <li><Truck size={16} /><span>Giao hàng nhanh toàn quốc <a href="#delivery">Xem chi tiết</a></span></li>
            <li><Watch size={16} /><span>Ưu đãi doanh nghiệp <a href="#business">b2b@thegioididong.com</a></span></li>
            <li><Phone size={16} /><span>Tổng đài: <a href="tel:1900969642">1900.9696.42</a> (8:00 - 21:30)</span></li>
            <li><Clock3 size={16} /><span>Hỗ trợ trả góp và thanh toán linh hoạt</span></li>
            <li><MapPin size={16} /><span>Kiểm tra tình trạng hàng tại cửa hàng gần bạn</span></li>
            <li><CreditCard size={16} /><span>Nhiều hình thức thanh toán an toàn</span></li>
          </ul>
        </div>
      </section>

      <section className="product-specifications" aria-label="Thông số sản phẩm">
        <div className="specification-tabs" role="tablist" aria-label="Chi tiết sản phẩm">
          <button
            id="specifications-tab"
            className={`specification-tab${selectedSpecsTab === 'specifications' ? ' is-selected' : ''}`}
            type="button"
            role="tab"
            aria-selected={selectedSpecsTab === 'specifications'}
            aria-controls="specifications-panel"
            onClick={() => setSelectedSpecsTab('specifications')}
          >
            Thông số kỹ thuật
          </button>
          <button
            id="product-info-tab"
            className={`specification-tab${selectedSpecsTab === 'product-info' ? ' is-selected' : ''}`}
            type="button"
            role="tab"
            aria-selected={selectedSpecsTab === 'product-info'}
            aria-controls="product-info-panel"
            onClick={() => setSelectedSpecsTab('product-info')}
          >
            Thông tin sản phẩm
          </button>
        </div>

        {selectedSpecsTab === 'specifications' ? (
          <div
            id="specifications-panel"
            className="specification-groups"
            role="tabpanel"
            aria-labelledby="specifications-tab"
          >
            {specificationGroups.map((group, index) => {
              const isOpen = openSpecificationGroup === index;
              const panelId = `specification-group-panel-${index}`;

              return (
                <section className="specification-group" key={group.title}>
                  <h2 className="specification-group-heading">
                    <button
                      className="specification-group-toggle"
                      type="button"
                      aria-expanded={isOpen}
                      aria-controls={panelId}
                      onClick={() => setOpenSpecificationGroup(isOpen ? null : index)}
                    >
                      {group.title}
                      <ChevronDown
                        className={isOpen ? 'is-rotated' : ''}
                        size={18}
                        aria-hidden="true"
                      />
                    </button>
                  </h2>
                  {isOpen && (
                    <dl className="specification-rows" id={panelId}>
                      {group.rows.map(([label, value]) => (
                        <div className="specification-row" key={label}>
                          <dt>{label}</dt>
                          <dd>{value}</dd>
                        </div>
                      ))}
                    </dl>
                  )}
                </section>
              );
            })}
          </div>
        ) : (
          <div
            id="product-info-panel"
            className="product-info-panel"
            role="tabpanel"
            aria-labelledby="product-info-tab"
          >
            <h2>{productTitle}</h2>
            <p>
              Tham khảo thông số kỹ thuật để biết thêm chi tiết về cấu hình, camera, màn hình,
              pin và các kết nối của sản phẩm.
            </p>
          </div>
        )}
      </section>
    </main>
  );
};

export default ProductDetailPage;