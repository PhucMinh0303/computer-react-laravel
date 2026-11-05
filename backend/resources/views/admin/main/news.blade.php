    <header class="topbar">
        <form class="search-form" role="search" action="#" method="get">
            <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.35-4.35" />
            </svg>
            <input type="search" name="q" placeholder="Search articles..." aria-label="Search articles">
        </form>
        <a href="#" class="create-button">
            <span aria-hidden="true">+</span>
            Create Article
        </a>
    </header>

    <div class="page-title-section">
        <h1 class="page-title">Articles</h1>

        <div class="filter-actions">
            <select class="filter-select" aria-label="Filter by status">
                <option>All Statuses</option>
                <option>Published</option>
                <option>Draft</option>
            </select>
            <select class="filter-select" aria-label="Filter by category">
                <option>All Categories</option>
                <option>Politics</option>
                <option>Economy</option>
            </select>
        </div>
    </div>

    <div class="table-container">
        <table class="admin-table">
            <caption class="sr-only">Articles with their categories, publication status, authors, and actions</caption>
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>CATEGORY</th>
                    <th>STATUS</th>
                    <th>AUTHOR</th>
                    <th class="text-right">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="table-title">0 views</div>
                    </td>
                    <td><span class="badge badge-category">Politics</span></td>
                    <td><span class="badge badge-draft">● Draft</span></td>
                    <td>Alex Editor</td>
                    <td class="text-right">
                        <button class="btn-icon" type="button" aria-label="Edit draft article"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                            </svg></button>
                        <button class="btn-icon text-danger" type="button" aria-label="Delete draft article"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <polyline points="3 6 5 6 21 6" />
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                            </svg></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-title-row">
                            <span class="table-thumbnail" aria-hidden="true"></span>
                            <div>
                                <div class="table-title">New Policy Reform Impacts Small Businesses Across the Nation</div>
                                <div class="table-subtitle">12.450 views</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge badge-category">Economy</span></td>
                    <td><span class="badge badge-published">● Published</span></td>
                    <td>Sarah Jenkins</td>
                    <td class="text-right">
                        <button class="btn-icon" type="button" aria-label="Edit published article"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                            </svg></button>
                        <button class="btn-icon text-danger" type="button" aria-label="Delete published article"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <polyline points="3 6 5 6 21 6" />
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                            </svg></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>