

<section class="dashboard" aria-labelledby="dashboard-title">
    <div class="dashboard-heading">
        <div>
            <h1 id="dashboard-title">Dashboard Overview</h1>
            <p>Monitoring performance across all channels</p>
        </div>
        <span class="updated">Last updated: Today, {{ now()->format('g:i A') }}</span>
    </div>

    <div class="stats-grid">
        <article class="stat-card">
            <p>Total Article Views</p>
            <div class="stat-bottom">
                <strong>12,450</strong>
                <span class="badge positive">+12.5%</span>
            </div>
        </article>
        <article class="stat-card">
            <p>Published Articles</p>
            <div class="stat-bottom">
                <strong>1</strong>
                <span class="badge positive">+3</span>
            </div>
        </article>
        <article class="stat-card">
            <p>Avg. Read Time</p>
            <div class="stat-bottom">
                <strong>4:22m</strong>
                <span class="badge negative">-0.4%</span>
            </div>
        </article>
        <article class="stat-card">
            <p>Active Editors</p>
            <div class="stat-bottom">
                <strong>12</strong>
                <span class="badge neutral">0</span>
            </div>
        </article>
    </div>

    <div class="dashboard-grid">
        <section class="panel" aria-labelledby="traffic-title">
            <div class="panel-heading">
                <div>
                    <h2 id="traffic-title">Traffic Trends (Last 7 Days)</h2>
                </div>
            </div>
            <div class="chart" role="img" aria-label="Article views: Monday 4000, Tuesday 3000, Wednesday 2000, Thursday 2800, Friday 1900, Saturday 2400, Sunday 3500">
                <div class="chart-y-labels" aria-hidden="true">
                    <span>4000</span><span>3000</span><span>2000</span><span>1000</span><span>0</span>
                </div>
                <div class="chart-content">
                    <div class="chart-grid-lines" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
                    <svg class="chart-svg" viewBox="0 0 700 260" preserveAspectRatio="none" aria-hidden="true">
                        <defs>
                            <linearGradient id="traffic-fill" x1="0" x2="0" y1="0" y2="1">
                                <stop offset="0%" stop-color="#5145e8" stop-opacity=".12"/>
                                <stop offset="100%" stop-color="#5145e8" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                        <path d="M0 0 C45 20 65 34 100 52 S165 105 200 117 S265 98 300 83 S365 60 400 82 S465 128 500 125 S565 111 600 97 S665 49 700 31 V260 H0Z" fill="url(#traffic-fill)"/>
                        <path d="M0 0 C45 20 65 34 100 52 S165 105 200 117 S265 98 300 83 S365 60 400 82 S465 128 500 125 S565 111 600 97 S665 49 700 31" fill="none" stroke="#5145e8" stroke-width="2.5" vector-effect="non-scaling-stroke"/>
                    </svg>
                    <div class="chart-x-labels" aria-hidden="true">
                        <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="panel stories-panel" aria-labelledby="stories-title">
            <div class="panel-heading">
                <div>
                    <h2 id="stories-title">Top Performing Stories</h2>
                </div>
            </div>
            <ol class="stories-list">
                <li class="story">
                    <div class="story-info">
                        <strong>New Policy Reform Impacts Small Businesses</strong>
                        <small>Economy &bull; Sarah Jenkins</small>
                    </div>
                    <span class="story-views">12.4k</span>
                </li>
                <li class="story">
                    <div class="story-info">
                        <small>Politics &bull; Alex Editor</small>
                    </div>
                    <span class="story-views">0</span>
                </li>
            </ol>
            <a href="#" class="report-link">View full report</a>
        </section>
    </div>
</section>
