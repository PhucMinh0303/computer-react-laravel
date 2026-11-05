<header class="topbar">
    <form class="search-form" role="search" action="#" method="get">
        <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.35-4.35" />
        </svg>
        <input type="search" name="q" placeholder="Search videos..." aria-label="Search videos">
    </form>
    <button class="create-button" type="button" data-open-video-modal>
        <span aria-hidden="true">+</span>
        Upload Video
    </button>
</header>

<dialog class="video-modal" id="add-video-modal" aria-labelledby="video-modal-title">
    <form class="video-modal-form" id="add-video-form">
        <div class="video-modal-heading">
            <h2 id="video-modal-title">ADD NEW VIDEO</h2>
            <button class="video-modal-close" type="button" data-close-video-modal aria-label="Close dialog">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="m18 6-12 12M6 6l12 12" />
                </svg>
            </button>
        </div>

        <label class="video-modal-label" for="video-title">VIDEO TITLE</label>
        <input class="video-modal-input" id="video-title" name="title" type="text" placeholder="Enter video title" required>

        <label class="video-modal-label" for="video-url">YOUTUBE URL</label>
        <input class="video-modal-input" id="video-url" name="url" type="url" placeholder="https://www.youtube.com/watch?v=..." required>

        <label class="video-modal-label" for="video-description">DESCRIPTION</label>
        <textarea class="video-modal-input video-modal-textarea" id="video-description" name="description" placeholder="Short video description..." rows="4"></textarea>

        <div class="video-modal-actions">
            <button class="video-modal-cancel" type="button" data-close-video-modal>Cancel</button>
            <button class="video-modal-submit" type="submit">Add Video</button>
        </div>
    </form>
</dialog>

<div class="page-title-section">
    <h1 class="page-title">Videos</h1>

    <div class="filter-actions">
        <select class="filter-select" aria-label="Filter by status">
            <option>All Statuses</option>
            <option>Published</option>
            <option>Draft</option>
        </select>
        <select class="filter-select" aria-label="Filter by category">
            <option>All Categories</option>
            <option>Reviews</option>
            <option>Tutorials</option>
            <option>News</option>
        </select>
    </div>
</div>

<div class="table-container">
    <table class="admin-table">
        <caption class="sr-only">Videos with their categories, publication status, and actions</caption>
        <thead>
            <tr>
                <th>VIDEO</th>
                <th>CATEGORY</th>
                <th>STATUS</th>
                <th>DURATION</th>
                <th class="text-right">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="table-title-row">
                        <span class="table-thumbnail" aria-hidden="true"></span>
                        <div>
                            <div class="table-title">iPhone Review and First Impressions</div>
                            <div class="table-subtitle">Uploaded today</div>
                        </div>
                    </div>
                </td>
                <td><span class="badge badge-category">Reviews</span></td>
                <td><span class="badge badge-published">● Published</span></td>
                <td>08:24</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit iPhone Review and First Impressions">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-video aria-label="Delete iPhone Review and First Impressions">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="table-title-row">
                        <span class="table-thumbnail" aria-hidden="true"></span>
                        <div>
                            <div class="table-title">How to Choose the Right MacBook</div>
                            <div class="table-subtitle">Uploaded yesterday</div>
                        </div>
                    </div>
                </td>
                <td><span class="badge badge-category">Tutorials</span></td>
                <td><span class="badge badge-published">● Published</span></td>
                <td>12:06</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit How to Choose the Right MacBook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-video aria-label="Delete How to Choose the Right MacBook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="table-title-row">
                        <span class="table-thumbnail" aria-hidden="true"></span>
                        <div>
                            <div class="table-title">Latest Apple Product Updates</div>
                            <div class="table-subtitle">Draft</div>
                        </div>
                    </div>
                </td>
                <td><span class="badge badge-category">News</span></td>
                <td><span class="badge badge-draft">● Draft</span></td>
                <td>05:42</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit Latest Apple Product Updates">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-video aria-label="Delete Latest Apple Product Updates">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        const videoModal = document.querySelector('#add-video-modal');
        const addVideoForm = document.querySelector('#add-video-form');

        document.querySelector('[data-open-video-modal]').addEventListener('click', () => {
            videoModal.showModal();
            addVideoForm.elements.title.focus();
        });

        document.querySelectorAll('[data-close-video-modal]').forEach((button) => {
            button.addEventListener('click', () => videoModal.close());
        });

        addVideoForm.addEventListener('submit', (event) => {
            event.preventDefault();
            if (!addVideoForm.reportValidity()) return;

            const title = addVideoForm.elements.title.value.trim();
            const row = document.createElement('tr');
            row.dataset.youtubeUrl = addVideoForm.elements.url.value.trim();
            row.dataset.description = addVideoForm.elements.description.value.trim();
            const videoCell = document.createElement('td');
            const titleRow = document.createElement('div');
            const thumbnail = document.createElement('span');
            const videoInfo = document.createElement('div');
            const videoTitle = document.createElement('div');
            const videoSubtitle = document.createElement('div');

            titleRow.className = 'table-title-row';
            thumbnail.className = 'table-thumbnail';
            thumbnail.setAttribute('aria-hidden', 'true');
            videoTitle.className = 'table-title';
            videoTitle.textContent = title;
            videoSubtitle.className = 'table-subtitle';
            videoSubtitle.textContent = 'Draft';
            videoInfo.append(videoTitle, videoSubtitle);
            titleRow.append(thumbnail, videoInfo);
            videoCell.append(titleRow);

            const categoryCell = document.createElement('td');
            const categoryBadge = document.createElement('span');
            categoryBadge.className = 'badge badge-category';
            categoryBadge.textContent = 'News';
            categoryCell.append(categoryBadge);

            const statusCell = document.createElement('td');
            const statusBadge = document.createElement('span');
            statusBadge.className = 'badge badge-draft';
            statusBadge.textContent = '● Draft';
            statusCell.append(statusBadge);

            const durationCell = document.createElement('td');
            durationCell.textContent = '--:--';

            const actionsCell = document.createElement('td');
            actionsCell.className = 'text-right';
            const deleteButton = document.createElement('button');
            deleteButton.className = 'btn-icon text-danger';
            deleteButton.type = 'button';
            deleteButton.dataset.deleteVideo = '';
            deleteButton.setAttribute('aria-label', `Delete ${title}`);
            deleteButton.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="3 6 5 6 21 6" /><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" /></svg>';
            actionsCell.append(deleteButton);

            row.append(videoCell, categoryCell, statusCell, durationCell, actionsCell);
            document.querySelector('.admin-table tbody').prepend(row);
            addVideoForm.reset();
            videoModal.close();
        });

        document.addEventListener('click', (event) => {
            const button = event.target.closest('[data-delete-video]');
            if (!button) return;

            const videoTitle = button.closest('tr').querySelector('.table-title').textContent.trim();
            if (window.confirm(`Bạn có chắc muốn xoá video "${videoTitle}" không?`)) {
                button.closest('tr').remove();
            }
        });
    </script>
@endpush
