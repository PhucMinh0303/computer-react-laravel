<aside class="sidebar" aria-label="Admin navigation">
    <a class="brand" href="{{ route('admin.home') }}" aria-label="NovaNews dashboard">
        <span class="brand-logo" aria-hidden="true">N</span>
        <span>NovaNews</span>
    </a>

    <nav class="sidebar-nav">
        <a href="{{ route('admin.dashboard') }}" class="nav-item{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}" @if(request()->routeIs('admin.dashboard')) aria-current="page" @endif>
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect x="3" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="3" width="7" height="7" rx="1" />
                <rect x="3" y="14" width="7" height="7" rx="1" />
                <rect x="14" y="14" width="7" height="7" rx="1" />
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.news') }}" class="nav-item{{ request()->routeIs('admin.news') ? ' active' : '' }}" @if(request()->routeIs('admin.news')) aria-current="page" @endif>
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                <path d="M14 2v6h6M8 13h8M8 17h8" />
            </svg>
            <span>News</span>
        </a>
        <a href="{{ route('admin.products') }}" class="nav-item{{ request()->routeIs('admin.products') ? ' active' : '' }}" @if(request()->routeIs('admin.products')) aria-current="page" @endif>
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect x="2" y="7" width="20" height="14" rx="2" />
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
            </svg>
            <span>Products</span>
        </a>
        <a href="{{ route('admin.videos') }}" class="nav-item{{ request()->routeIs('admin.videos') ? ' active' : '' }}" @if(request()->routeIs('admin.videos')) aria-current="page" @endif>
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
            <span>Videos</span>
        </a>
        <a href="#" class="nav-item">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
            <span>Flashship</span>
        </a>
        <a href="#" class="nav-item">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z" />
                <path d="m22 6-10 7L2 6" />
            </svg>
            <span>Contact</span>
        </a>
        <a href="#" class="nav-item">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <circle cx="8.5" cy="8.5" r="1.5" />
                <path d="m21 15-5-5L5 21" />
            </svg>
            <span>Media Library</span>
        </a>
        <a href="#" class="nav-item">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M3 3v18h18M18 17V9M13 17V5M8 17v-3" />
            </svg>
            <span>Analytics</span>
        </a>

        <div class="nav-label">EXPERIMENTAL</div>
        <a href="#" class="nav-item">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-1.9-5.8L4 11l6.1-2.2L12 3Z" />
                <path d="m19 14 1.2 2.8L23 18l-2.8 1.2L19 22l-1.2-2.8L15 18l2.8-1.2L19 14Z" />
            </svg>
            <span>AI Content Lab</span>
        </a>
    </nav>

    <div class="sidebar-user">
        <span class="avatar" aria-hidden="true">A</span>
        <div>
            <strong>Alex Editor</strong>
            <small>Chief Editor</small>
        </div>
    </div>
</aside>
