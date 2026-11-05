<header class="topbar">
    <form class="search-form" role="search" action="#" method="get">
        <svg viewBox="0 0 24 24" width="19" height="19" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.35-4.35" />
        </svg>
        <input type="search" name="q" placeholder="Search products..." aria-label="Search products">
    </form>
    <a href="#" class="create-button">
        <span aria-hidden="true">+</span>
        Add Product
    </a>
</header>

<div class="page-title-section">
    <h1 class="page-title">Products</h1>

    <div class="filter-actions">
        <select class="filter-select" aria-label="Filter by category">
            <option>All Categories</option>
            <option>iPhone</option>
            <option>Mac</option>
            <option>iPad</option>
            <option>iWatch</option>
            <option>AirPods</option>
            <option>Phụ kiện</option>
        </select>
    </div>
</div>

<div class="table-container">
    <table class="admin-table">
        <caption class="sr-only">Products with their categories, prices, and actions</caption>
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>CATEGORY</th>
                <th>PRICE</th>
                <th class="text-right">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><div class="table-title">iPhone 18 Pro Max 256GB</div></td>
                <td><span class="badge badge-category">iPhone</span></td>
                <td>41.990.000 ₫</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit iPhone 18 Pro Max 256GB">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-product aria-label="Delete iPhone 18 Pro Max 256GB">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td><div class="table-title">Macbook Pro 13 inch A19 Pro 8GB/256GB</div></td>
                <td><span class="badge badge-category">Mac</span></td>
                <td>15.190.000 ₫</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit Macbook Pro 13 inch A19 Pro 8GB/256GB">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-product aria-label="Delete Macbook Pro 13 inch A19 Pro 8GB/256GB">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td><div class="table-title">iPad Air M4 11 inch WiFi 128GB</div></td>
                <td><span class="badge badge-category">iPad</span></td>
                <td>15.190.000 ₫</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit iPad Air M4 11 inch WiFi 128GB">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-product aria-label="Delete iPad Air M4 11 inch WiFi 128GB">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td><div class="table-title">Apple Watch Series 12 GPS 46mm</div></td>
                <td><span class="badge badge-category">iWatch</span></td>
                <td>15.190.000 ₫</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit Apple Watch Series 12 GPS 46mm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-product aria-label="Delete Apple Watch Series 12 GPS 46mm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td><div class="table-title">AirPods Pro 4</div></td>
                <td><span class="badge badge-category">AirPods</span></td>
                <td>21.650.000 ₫</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit AirPods Pro 4">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-product aria-label="Delete AirPods Pro 4">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td><div class="table-title">Sạc nhanh USB-C 20W</div></td>
                <td><span class="badge badge-category">Phụ kiện</span></td>
                <td>21.650.000 ₫</td>
                <td class="text-right">
                    <button class="btn-icon" type="button" aria-label="Edit Sạc nhanh USB-C 20W">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                    </button>
                    <button class="btn-icon text-danger" type="button" data-delete-product aria-label="Delete Sạc nhanh USB-C 20W">
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
        document.addEventListener('click', (event) => {
            const button = event.target.closest('[data-delete-product]');
            if (!button) return;

            const productName = button.closest('tr').querySelector('.table-title').textContent.trim();
            if (window.confirm(`Bạn có chắc muốn xoá sản phẩm "${productName}" không?`)) {
                button.closest('tr').remove();
            }
        });
    </script>
@endpush
