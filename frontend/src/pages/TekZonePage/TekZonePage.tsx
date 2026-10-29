import './TekZonePage.css';
import chickenFighterImage from '../../assets/image/TekZone/thumbnail639226436759817073.png';
import fcMobileImage from '../../assets/image/TekZone/code-fc-mobile-thumb639117776092956774.png';
import homelanderImage from '../../assets/image/TekZone/code-cach-nhap-code-survive-homelander-thumb639165276956424368.png';

interface Article {
  id: number;
  title: string;
  image: string;
}

const featuredArticles: Article[] = [
  {
    id: 1,
    title: 'Code Survive Homelander 10/2026 mới nhất, cách nhập code trong game',
    image: homelanderImage,
  },
  {
    id: 2,
    title: 'Code Grow a Chicken Fighter tháng 10/2026 mới nhất, cách nhập code',
    image: chickenFighterImage,
  },
  {
    id: 3,
    title: 'Code FC Mobile Việt Nam 26 ngày 28/10/2026 mới nhất cập nhật liên tục, cách nhập code FC Mobile',
    image: fcMobileImage,
  },
];

function FeaturedArticle({ article, size }: { article: Article; size: 'large' | 'small' }) {
  return (
    <a className={`tekzone-feature-card tekzone-feature-card--${size}`} href="#!">
      <img className="tekzone-feature-image" src={article.image} alt="" />
      <span className="tekzone-feature-shade" aria-hidden="true" />
      <h2 className="tekzone-feature-title">{article.title}</h2>
    </a>
  );
}

function LatestArticle() {
  return (
    <a className="tekzone-latest-article" href="#!">
      <div className="tekzone-latest-thumbnail" role="img" aria-label="Minh họa trình chỉnh sửa video trên máy tính">
        <div className="tekzone-laptop">
          <div className="tekzone-laptop-screen">
            <div className="tekzone-editor-toolbar" />
            <div className="tekzone-editor-workspace">
              <div className="tekzone-editor-sidebar">
                <i />
                <i />
                <i />
              </div>
              <div className="tekzone-editor-preview">
                <span>Create</span>
                <b>Studio</b>
              </div>
            </div>
            <div className="tekzone-editor-timeline">
              <i />
              <i />
              <i />
            </div>
          </div>
          <div className="tekzone-laptop-base" />
        </div>
      </div>
      <div className="tekzone-latest-copy">
        <h3>Apple Creator Studio cập nhật Generate Fill, trợ lý AI cho Logic Pro</h3>
        <time>13 giờ trước</time>
      </div>
    </a>
  );
}

interface Video {
  id: number;
  title: string;
  thumbTitle: string;
  thumbSubtitle: string;
  variant: 'ios' | 'features' | 'sale' | 'check' | 'review';
}

const videos: Video[] = [
  {
    id: 1,
    title: 'Trải nghiệm iOS 17.4 Chính thức: Pin được cải thiện... ?? - Top OS',
    thumbTitle: 'Trải nghiệm',
    thumbSubtitle: 'iOS 17.4 chính thức',
    variant: 'ios',
  },
  {
    id: 2,
    title: 'Tổng hợp tính năng iOS 17 - Top Review',
    thumbTitle: 'iOS 17',
    thumbSubtitle: 'Có gì mới?',
    variant: 'features',
  },
  {
    id: 3,
    title: 'Top iPhone giảm sốc cuối năm 2023 - TopZone',
    thumbTitle: 'TOP IPHONE',
    thumbSubtitle: 'GIẢM SỐC 2023',
    variant: 'sale',
  },
  {
    id: 4,
    title: 'Kiểm tra iPhone trước khi mua để tránh bị lừa 2023 - Top Tips',
    thumbTitle: 'CHECK IPHONE',
    thumbSubtitle: 'CŨ 2023',
    variant: 'check',
  },
  {
    id: 5,
    title: 'Đánh giá iOS 17.1 Beta 3: Hiệu năng ngon hơn hẳn, khắc phục nóng máy iPhone... - Top OS',
    thumbTitle: 'Đánh giá iOS',
    thumbSubtitle: '17.1 Beta 3',
    variant: 'review',
  },
];

function VideoThumbnail({ video, featured = false }: { video: Video; featured?: boolean }) {
  return (
    <div className={`tekzone-video-thumb tekzone-video-thumb--${video.variant}${featured ? ' is-featured' : ''}`}>
      {featured ? (
        <>
          <span className="tekzone-video-brand">top<span>ZONE</span></span>
          <span className="tekzone-video-feature-text">
            <span>{video.thumbTitle}</span>
            <strong>{video.thumbSubtitle}</strong>
          </span>
          <span className="tekzone-video-phone" aria-hidden="true">
            <span>17.4</span>
          </span>
        </>
      ) : (
        <>
          <span className="tekzone-video-thumb-copy">
            <strong>{video.thumbTitle}</strong>
            <span>{video.thumbSubtitle}</span>
          </span>
          <span className="tekzone-video-mini-phone" aria-hidden="true">17</span>
        </>
      )}
      <span className="tekzone-video-play" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M8 5.8c0-.8.9-1.3 1.6-.9l10.1 6.2a1.1 1.1 0 0 1 0 1.8L9.6 19a1.1 1.1 0 0 1-1.6-.9V5.8Z" />
        </svg>
      </span>
    </div>
  );
}

function VideoSection() {
  const [featuredVideo, ...relatedVideos] = videos;

  return (
    <section className="tekzone-videos" aria-labelledby="tekzone-videos-heading">
      <h2 className="tekzone-latest-heading" id="tekzone-videos-heading">Video</h2>
      <div className="tekzone-video-grid">
        <a className="tekzone-video-feature" href="#!">
          <VideoThumbnail video={featuredVideo} featured />
          <h3>{featuredVideo.title}</h3>
        </a>
        <div className="tekzone-video-list">
          {relatedVideos.map((video) => (
            <a className="tekzone-video-item" href="#!" key={video.id}>
              <VideoThumbnail video={video} />
              <h3>{video.title}</h3>
            </a>
          ))}
        </div>
      </div>
    </section>
  );
}

function TekZonePage() {
  return (
    <main className="tekzone-page">
      <section className="tekzone-featured" aria-label="Bài viết nổi bật">
        <FeaturedArticle article={featuredArticles[0]} size="large" />
        <div className="tekzone-featured-side">
          <FeaturedArticle article={featuredArticles[1]} size="small" />
          <FeaturedArticle article={featuredArticles[2]} size="small" />
        </div>
      </section>

      <section className="tekzone-latest" aria-labelledby="tekzone-latest-heading">
        <h1 className="tekzone-latest-heading" id="tekzone-latest-heading">Mới nhất</h1>
        <LatestArticle />
      </section>

      <VideoSection />
    </main>
  );
}

export default TekZonePage;
