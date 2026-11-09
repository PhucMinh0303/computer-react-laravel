@extends('admin.layout')

@push('styles')
<link rel="stylesheet" href="{{ asset('resources/css/admin/additon/create-product.css') }}">
@endpush
<style>
    /* Create Product Page Styles */

    :root {
        --primary-color: #5B63FF;
        --primary-light: #F0F2FF;
        --text-dark: #1A1A1A;
        --text-gray: #808080;
        --text-light: #999999;
        --border-color: #E8E8E8;
        --bg-light: #F5F5F5;
        --bg-white: #FFFFFF;
        --success-color: #2ECC71;
        --error-color: #E74C3C;
    }

    .create-product-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 30px 20px;
        background-color: #F9F9F9;
        min-height: 100vh;
    }

    /* Header */
    .create-product-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        background-color: var(--bg-white);
        padding: 20px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
    }

    .header-left {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .back-btn {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: var(--text-dark);
        padding: 5px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: color 0.3s ease;
    }

    .back-btn:hover {
        color: var(--primary-color);
    }

    .header-title h1 {
        font-size: 20px;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
        padding: 0;
    }

    .header-title p {
        font-size: 12px;
        color: var(--text-light);
        margin: 5px 0 0 0;
        padding: 0;
    }

    .header-right {
        display: flex;
        gap: 12px;
    }

    .btn-cancel,
    .btn-save {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-cancel {
        background-color: var(--bg-light);
        color: var(--text-dark);
        border: 1px solid var(--border-color);
    }

    .btn-cancel:hover {
        background-color: #E8E8E8;
    }

    .btn-save {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-save:hover {
        background-color: #4A4F99;
        box-shadow: 0 4px 12px rgba(91, 99, 255, 0.3);
    }

    /* Form Styles */
    .product-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-section {
        background-color: var(--bg-white);
        padding: 25px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
    }

    .form-label {
        display: block;
        font-size: 12px;
        font-weight: 600;
        color: var(--text-light);
        text-transform: uppercase;
        margin-bottom: 12px;
        letter-spacing: 0.5px;
    }

    .form-input,
    .form-select,
    .form-textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        font-size: 14px;
        font-family: inherit;
        transition: all 0.3s ease;
        color: var(--text-dark);
    }

    .form-input::placeholder,
    .form-textarea::placeholder {
        color: #D0D0D0;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(91, 99, 255, 0.1);
    }

    .form-textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-select {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23999' d='M1 1l5 5 5-5'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        padding-right: 35px;
    }

    /* Tab Navigation */
    .tab-navigation {
        display: flex;
        gap: 10px;
        background-color: var(--bg-white);
        padding: 20px 25px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        border-bottom: 2px solid var(--border-color);
    }

    .tab-btn {
        padding: 10px 20px;
        background-color: transparent;
        border: none;
        border-bottom: 3px solid transparent;
        font-size: 14px;
        font-weight: 500;
        color: var(--text-gray);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tab-btn.active {
        color: var(--primary-color);
        border-bottom-color: var(--primary-color);
    }

    .tab-btn:hover {
        color: var(--primary-color);
    }

    /* Tab Content */
    .tab-content {
        display: none;
        animation: fadeIn 0.3s ease;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Section Header */
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .title-dot {
        width: 4px;
        height: 20px;
        background-color: var(--primary-color);
        border-radius: 2px;
    }

    .section-title h3 {
        font-size: 14px;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
        text-transform: uppercase;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 40px;
        background-color: #FAFAFA;
        border-radius: 8px;
        border: 1px dashed var(--border-color);
    }

    .empty-text {
        font-size: 14px;
        color: var(--text-light);
        margin: 0 0 15px 0;
    }

    .link-add-spec {
        color: var(--primary-color);
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .link-add-spec:hover {
        text-decoration: underline;
    }

    /* Button Add Spec */
    .btn-add-spec {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background-color: var(--primary-light);
        border: none;
        border-radius: 6px;
        color: var(--primary-color);
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-add-spec:hover {
        background-color: #E0E4FF;
    }

    .btn-add-spec i {
        font-size: 14px;
    }

    /* Specs List */
    .specs-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .spec-item {
        background-color: var(--bg-white);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .spec-item:hover {
        border-color: var(--primary-color);
        box-shadow: 0 2px 8px rgba(91, 99, 255, 0.1);
    }

    .spec-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        cursor: pointer;
        background-color: var(--bg-white);
        transition: background-color 0.3s ease;
    }

    .spec-item:hover .spec-header {
        background-color: #FAFAFA;
    }

    .spec-title {
        font-size: 14px;
        font-weight: 500;
        color: var(--text-dark);
        flex: 1;
    }

    .spec-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-left: 16px;
    }

    .spec-delete-btn,
    .spec-toggle-btn {
        background: none;
        border: none;
        font-size: 16px;
        color: var(--text-light);
        cursor: pointer;
        padding: 4px 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border-radius: 4px;
    }

    .spec-delete-btn:hover {
        color: var(--error-color);
        background-color: rgba(231, 76, 60, 0.1);
    }

    .spec-toggle-btn:hover {
        color: var(--primary-color);
        background-color: var(--primary-light);
    }

    .spec-toggle-btn i {
        transition: transform 0.3s ease;
    }

    .spec-item.open .spec-toggle-btn i {
        transform: rotate(180deg);
    }

    .spec-item.open .spec-header {
        background-color: #F8F9FC;
        border-bottom: 1px solid var(--border-color);
    }

    .spec-body {
        display: none;
        padding: 12px 28px 24px;
    }

    .spec-item.open .spec-body {
        display: block;
    }

    .spec-row {
        display: grid;
        grid-template-columns: 310px 1fr;
        gap: 12px;
        align-items: start;
        padding: 14px 0;
        border-bottom: 1px solid #F0F0F0;
    }

    .spec-row-label {
        font-size: 14px;
        font-weight: 500;
        color: #3F4558;
        line-height: 1.5;
    }

    .spec-row-label-input,
    .spec-row-value {
        width: 100%;
        border: none;
        outline: none;
        background: transparent;
        font-family: inherit;
        font-size: 14px;
        line-height: 1.5;
        color: var(--text-dark);
        resize: none;
        overflow: hidden;
        padding: 0;
    }

    .spec-row-label-input {
        font-weight: 500;
        color: #3F4558;
    }

    .spec-row-value::placeholder,
    .spec-row-label-input::placeholder {
        color: var(--text-light);
    }

    .btn-add-spec-row {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        margin-top: 24px;
        padding: 14px;
        background: transparent;
        border: 2px dashed #E3E6EF;
        border-radius: 10px;
        color: #8A90A6;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-add-spec-row:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background-color: var(--primary-light);
    }

    @media (max-width: 768px) {
        .spec-row {
            grid-template-columns: 1fr;
            gap: 4px;
        }

        .spec-body {
            padding: 8px 16px 20px;
        }
    }

    /* Form Row */
    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    /* Price Storage Section */
    .price-storage-section .form-row {
        margin-top: 20px;
    }

    .input-with-prefix {
        position: relative;
        display: flex;
        align-items: center;
    }

    .prefix {
        position: absolute;
        left: 15px;
        font-size: 14px;
        font-weight: 600;
        color: var(--text-gray);
    }

    .input-with-prefix .form-input {
        padding-left: 50px;
    }

    /* Images Section */
    .images-section {
        background-color: #1A2040;
        color: white;
        padding: 30px;
        border-radius: 12px;
        border: none;
    }

    .images-section .section-title h3 {
        color: white;
    }

    .images-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .image-upload-box {
        aspect-ratio: 1;
        border: 2px dashed rgba(255, 255, 255, 0.3);
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        gap: 10px;
        background-color: rgba(255, 255, 255, 0.05);
    }

    .image-preview {
        position: relative;
        aspect-ratio: 1;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--border-color);
    }

    .image-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .image-preview .btn-remove-image {
        position: absolute;
        top: 6px;
        right: 6px;
        width: 24px;
        height: 24px;
        border: none;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        cursor: pointer;
        line-height: 1;
    }

    .image-upload-box:hover {
        border-color: var(--primary-color);
        background-color: rgba(91, 99, 255, 0.1);
    }

    .btn-add-image {
        width: 50px;
        height: 50px;
        background-color: var(--primary-color);
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .btn-add-image:hover {
        background-color: #4A4F99;
        transform: scale(1.05);
    }

    .image-upload-box p {
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
        color: rgba(255, 255, 255, 0.7);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .create-product-header {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }

        .header-right {
            width: 100%;
            gap: 10px;
        }

        .btn-cancel,
        .btn-save {
            flex: 1;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .tab-navigation {
            flex-wrap: wrap;
        }

        .images-grid {
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }

        .create-product-container {
            padding: 15px 10px;
        }
    }

    /* WYSIWYG Editor Styles */
    .wysiwyg-editor {
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        background-color: var(--bg-white);
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }

    .editor-toolbar {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 15px;
        background-color: #FAFAFA;
        border-bottom: 1px solid var(--border-color);
        flex-wrap: nowrap;
        overflow-x: auto;
    }

    .toolbar-select {
        padding: 6px 10px;
        border: 1px solid var(--border-color);
        border-radius: 4px;
        font-size: 13px;
        font-weight: 500;
        color: var(--text-dark);
        background-color: var(--bg-white);
        cursor: pointer;
        transition: all 0.3s ease;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23999' d='M1 1l5 5 5-5'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 8px center;
        padding-right: 25px;
        min-width: 80px;
    }

    .toolbar-select:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 2px rgba(91, 99, 255, 0.1);
    }

    .toolbar-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2px;
        min-width: 32px;
        height: 32px;
        padding: 6px 8px;
        background-color: var(--bg-white);
        border: 1px solid var(--border-color);
        border-radius: 4px;
        color: var(--text-dark);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .toolbar-btn:hover {
        background-color: var(--bg-light);
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    .toolbar-btn.active {
        background-color: var(--primary-light);
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    /* Editor Content Area */
    .editor-content {
        min-height: 350px;
        padding: 20px;
        font-size: 14px;
        line-height: 1.6;
        color: var(--text-dark);
        overflow-y: auto;
        outline: none;
        word-wrap: break-word;
        word-break: break-word;
        font-family: inherit;
    }

    .editor-content[data-placeholder]:empty:before {
        content: attr(data-placeholder);
        color: #A0A0A0;
        font-style: italic;
    }

    .editor-content img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
    }

    .editor-content:focus {
        background-color: #FAFAFA;
    }

    .editor-hidden-input {
        display: none;
    }

    /* Responsive - Editor Styles */
    @media (max-width: 768px) {
        .editor-toolbar {
            gap: 6px;
            padding: 10px 12px;
        }

        .toolbar-btn {
            min-width: 28px;
            height: 28px;
            font-size: 12px;
            padding: 4px 6px;
        }

        .toolbar-select {
            padding: 4px 8px;
            font-size: 12px;
            min-width: 70px;
        }

        .editor-content {
            min-height: 280px;
            padding: 15px;
        }
    }

    @media (max-width: 480px) {
        .editor-content {
            min-height: 220px;
            padding: 12px;
        }

        .editor-toolbar {
            gap: 4px;
            padding: 8px 10px;
        }
    }

    @media (max-width: 480px) {
        .header-title h1 {
            font-size: 16px;
        }

        .header-title p {
            font-size: 11px;
        }

        .form-section {
            padding: 15px;
        }

        .images-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

@section('content')
<div class="admin-layout">
    @include('admin.menu.menu')
    <main class="main-content">
        <div class="create-product-container">
            <!-- Header -->
            <div class="create-product-header">
                <div class="header-left">
                    <button class="back-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="header-title">
                        <h1>CHỈNH SỬA SẢN PHẨM</h1>
                        <p>Quản lý chi tiết kỹ thuật và nội dung giới thiệu</p>
                    </div>
                </div>
                <div class="header-right">
                    <button class="btn-cancel">Hủy bỏ</button>
                    <button class="btn-save">Lưu sản phẩm</button>
                </div>
            </div>

            <!-- Form Content -->
            <form class="product-form" enctype="multipart/form-data">
                <!-- Product Name Section -->
                <div class="form-section">
                    <label class="form-label">TÊN SẢN PHẨM</label>
                    <input type="text" class="form-input" placeholder="Ví dụ: Nova Phone X Pro" name="product_name">
                </div>

                <!-- Tab Navigation -->
                <div class="tab-navigation">
                    <button type="button" class="tab-btn active" data-tab="specifications">
                        Thông số kỹ thuật
                    </button>
                    <button type="button" class="tab-btn" data-tab="info">
                        Thông tin sản phẩm
                    </button>
                </div>

                <!-- Specifications Tab -->
                <div class="tab-content active" id="specifications">
                    <div class="form-section">
                        <div class="section-header">
                            <label class="section-label">DANH SÁCH THÔNG SỐ</label>
                            <button type="button" class="btn-add-spec">
                                <i class="fas fa-plus"></i>
                                <span>Thêm Nhóm Thông Số</span>
                            </button>
                        </div>

                        <div class="specs-list">
                        @php
                            $specGroups = [
                                'Cấu hình & Bộ nhớ' => ['Hệ điều hành', 'Chip xử lý (CPU)', 'Tốc độ CPU', 'Chip đồ họa (GPU)', 'RAM', 'Dung lượng lưu trữ', 'Dung lượng còn lại (khả dụng) khoảng', 'Thẻ nhớ', 'Danh bạ'],
                                'Camera & Màn hình' => ['Độ phân giải camera sau', 'Quay phim camera sau', 'Đèn Flash', 'Độ phân giải camera trước', 'Công nghệ màn hình', 'Độ phân giải màn hình', 'Màn hình rộng', 'Tần số quét', 'Độ sáng tối đa'],
                                'Pin & Sạc' => ['Dung lượng pin', 'Loại pin', 'Hỗ trợ sạc tối đa', 'Công nghệ pin'],
                                'Tiện ích' => ['Bảo mật nâng cao', 'Tính năng đặc biệt', 'Kháng nước, bụi', 'Ghi âm', 'Xem phim', 'Nghe nhạc'],
                                'Kết nối' => ['Mạng di động', 'SIM', 'WiFi', 'GPS', 'Bluetooth', 'Cổng kết nối/sạc', 'Jack tai nghe'],
                                'Thiết kế & Chất liệu' => ['Thiết kế', 'Chất liệu', 'Kích thước, khối lượng', 'Thời điểm ra mắt'],
                            ];
                        @endphp

                        @foreach ($specGroups as $groupName => $rows)
                        <div class="spec-item {{ $loop->first ? 'open' : '' }}">
                            <div class="spec-header">
                                <span class="spec-title">{{ $groupName }}</span>
                                <div class="spec-actions">
                                    <button type="button" class="spec-delete-btn" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="spec-toggle-btn" title="Mở rộng">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="spec-body">
                                <div class="spec-rows">
                                    @foreach ($rows as $row)
                                    <div class="spec-row">
                                        <label class="spec-row-label">{{ $row }}</label>
                                        <input type="hidden" name="specs[{{ $groupName }}][{{ $loop->index }}][label]" value="{{ $row }}">
                                        <textarea class="spec-row-value" rows="1" name="specs[{{ $groupName }}][{{ $loop->index }}][value]" placeholder="Giá trị..."></textarea>
                                    </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn-add-spec-row" data-group="{{ $groupName }}">
                                    <i class="fas fa-plus"></i>
                                    <span>Thêm dòng thông số</span>
                                </button>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>

                <!-- Product Info Tab -->
                <div class="tab-content" id="info">
                    <div class="form-section">
                        <label class="form-label">MÔ TẢ SẢN PHẨM (WYSIWYG)</label>

                        <!-- WYSIWYG Editor -->
                        <div class="wysiwyg-editor">
                            <!-- Toolbar -->
                            <div class="editor-toolbar">
                                <select class="toolbar-select" id="styleSelect">
                                    <option value="p">Normal</option>
                                    <option value="h1">Heading 1</option>
                                    <option value="h2">Heading 2</option>
                                    <option value="h3">Heading 3</option>
                                </select>

                                <button type="button" class="toolbar-btn" title="Bold" data-command="bold">
                                    <strong>B</strong>
                                </button>

                                <button type="button" class="toolbar-btn" title="Italic" data-command="italic">
                                    <em>I</em>
                                </button>

                                <button type="button" class="toolbar-btn" title="Underline" data-command="underline">
                                    <u>U</u>
                                </button>
                                <button type="button" class="toolbar-btn" id="editorPictureBtn" title="Picture">
                                    <i class="fa-solid fa-camera"></i>
                                </button>
                                <input type="file" id="editorImageInput" accept="image/*" hidden>


                            </div>

                            <!-- Editor Content Area -->
                            <div class="editor-content" id="editorContent" contenteditable="true" data-placeholder="Nhập thông tin giới thiệu chi tiết về sản phẩm..."></div>

                            <!-- Hidden input to store HTML -->
                            <input type="hidden" name="product_description" class="editor-hidden-input" id="editorInput">
                        </div>
                    </div>
                </div>

                <!-- Price & Storage Section -->
                <div class="form-section price-storage-section">
                    <div class="section-title">
                        <span class="title-dot"></span>
                        <h3>Giá & Kho hàng</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">GIÁ BÁN (VND)</label>
                            <div class="input-with-prefix">
                                <span class="prefix">VND</span>
                                <input type="number" class="form-input" placeholder="0" name="price" value="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">SỐ LƯỢNG TRONG KHO</label>
                            <input type="number" class="form-input" placeholder="0" name="quantity" value="0">
                        </div>

                        <div class="form-group">
                            <label class="form-label">TRẠNG THÁI</label>
                            <select class="form-select" name="status">
                                <option value="bán">Bán nhập</option>
                                <option value="stop">Dừng bán</option>
                                <option value="draft">Nháp</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Images Section -->
                <div class="form-section images-section">
                    <div class="section-title">
                        <span class="title-dot"></span>
                        <h3>Hình ảnh</h3>
                    </div>

                    <div class="images-grid">
                        <div class="image-upload-box">
                            <button type="button" class="btn-add-image">
                                <i class="fa-solid fa-camera"></i>
                            </button>
                            <p>THÊM ẢNH</p>
                            <input type="file" id="imageInput" name="images[]" accept="image/*" multiple hidden>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>

<script>
    // WYSIWYG Editor Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const editorContent = document.getElementById('editorContent');
        const editorInput = document.getElementById('editorInput');
        const toolbarButtons = document.querySelectorAll('.toolbar-btn[data-command]');
        const styleSelect = document.getElementById('styleSelect');
        const fontSizeBtn = document.getElementById('fontSizeBtn');
        const tabButtons = document.querySelectorAll('.tab-btn');

        // Image upload: open file explorer, preview and remove
        const uploadBox = document.querySelector('.image-upload-box');
        const imageInput = document.getElementById('imageInput');
        const imagesGrid = document.querySelector('.images-grid');
        let selectedFiles = new DataTransfer();

        const syncInput = () => { imageInput.files = selectedFiles.files; };

        uploadBox.addEventListener('click', function(e) {
            if (e.target !== imageInput) imageInput.click();
        });

        imageInput.addEventListener('change', function() {
            Array.from(imageInput.files).forEach(file => {
                if (!file.type.startsWith('image/')) return;
                selectedFiles.items.add(file);

                const preview = document.createElement('div');
                preview.className = 'image-preview';
                const img = document.createElement('img');
                const url = URL.createObjectURL(file);
                img.src = url;
                img.alt = file.name;
                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'btn-remove-image';
                removeBtn.innerHTML = '&times;';
                removeBtn.addEventListener('click', () => {
                    const next = new DataTransfer();
                    Array.from(selectedFiles.files).forEach(f => { if (f !== file) next.items.add(f); });
                    selectedFiles = next;
                    syncInput();
                    URL.revokeObjectURL(url);
                    preview.remove();
                });
                preview.append(img, removeBtn);
                imagesGrid.insertBefore(preview, uploadBox);
            });
            syncInput();
        });

        // Specification groups: toggle, delete, add row, auto-grow textarea
        const specsList = document.querySelector('.specs-list');
        const autoGrow = el => {
            el.style.height = 'auto';
            el.style.height = el.scrollHeight + 'px';
        };

        specsList.addEventListener('click', function(e) {
            const item = e.target.closest('.spec-item');
            if (!item) return;

            if (e.target.closest('.spec-delete-btn')) {
                item.remove();
            } else if (e.target.closest('.btn-add-spec-row')) {
                const addBtn = e.target.closest('.btn-add-spec-row');
                const rows = item.querySelector('.spec-rows');
                const index = rows.children.length;
                const group = addBtn.dataset.group;
                const row = document.createElement('div');
                row.className = 'spec-row';
                row.innerHTML = '<input type="text" class="spec-row-label-input" placeholder="Tên thông số..."><textarea class="spec-row-value" rows="1" placeholder="Giá trị..."></textarea>';
                row.querySelector('input').name = `specs[${group}][${index}][label]`;
                row.querySelector('textarea').name = `specs[${group}][${index}][value]`;
                rows.appendChild(row);
                row.querySelector('input').focus();
            } else if (e.target.closest('.spec-header')) {
                item.classList.toggle('open');
                item.querySelectorAll('.spec-row-value').forEach(autoGrow);
            }
        });

        specsList.addEventListener('input', function(e) {
            if (e.target.classList.contains('spec-row-value')) autoGrow(e.target);
        });

        // Tab switching functionality
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const tabName = this.getAttribute('data-tab');

                // Remove active class from all buttons and contents
                tabButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                });

                // Add active class to clicked button and corresponding content
                this.classList.add('active');
                document.getElementById(tabName).classList.add('active');

                // Focus editor when switching to info tab
                if (tabName === 'info') {
                    setTimeout(() => editorContent.focus(), 100);
                }
            });
        });

        // Insert picture into the editor via File Explorer
        const pictureBtn = document.getElementById('editorPictureBtn');
        const editorImageInput = document.getElementById('editorImageInput');
        let savedRange = null;

        const saveSelection = () => {
            const sel = window.getSelection();
            if (sel.rangeCount && editorContent.contains(sel.anchorNode)) {
                savedRange = sel.getRangeAt(0).cloneRange();
            }
        };
        editorContent.addEventListener('keyup', saveSelection);
        editorContent.addEventListener('mouseup', saveSelection);
        editorContent.addEventListener('blur', saveSelection);

        pictureBtn.addEventListener('mousedown', e => e.preventDefault());
        pictureBtn.addEventListener('click', function() {
            saveSelection();
            editorImageInput.click();
        });

        editorImageInput.addEventListener('change', function() {
            const file = editorImageInput.files[0];
            editorImageInput.value = '';
            if (!file || !file.type.startsWith('image/')) return;

            const reader = new FileReader();
            reader.onload = function(ev) {
                editorContent.focus();
                const sel = window.getSelection();
                sel.removeAllRanges();
                if (savedRange) {
                    sel.addRange(savedRange);
                } else {
                    const range = document.createRange();
                    range.selectNodeContents(editorContent);
                    range.collapse(false);
                    sel.addRange(range);
                }
                document.execCommand('insertImage', false, ev.target.result);
                updateEditorInput();
            };
            reader.readAsDataURL(file);
        });

        // Toolbar button click handlers
        toolbarButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const command = this.getAttribute('data-command');

                if (command === 'createLink') {
                    const url = prompt('Nhập URL:');
                    if (url) {
                        document.execCommand(command, false, url);
                    }
                } else {
                    document.execCommand(command, false, null);
                }

                editorContent.focus();
                updateEditorInput();
            });
        });

        // Font size button handler
        if (fontSizeBtn) fontSizeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const size = prompt('Nhập kích cỡ (1-7):', '3');
            if (size && size >= 1 && size <= 7) {
                document.execCommand('fontSize', false, size);
                editorContent.focus();
                updateEditorInput();
            }
        });

        // Style select handler
        styleSelect.addEventListener('change', function() {
            const value = this.value;
            document.execCommand('formatBlock', false, '<' + value + '>');
            editorContent.focus();
            updateEditorInput();
        });

        // Update hidden input with editor content
        function updateEditorInput() {
            editorInput.value = editorContent.innerHTML;
        }

        // Save content on input
        editorContent.addEventListener('input', updateEditorInput);
        editorContent.addEventListener('keyup', updateEditorInput);
        editorContent.addEventListener('paste', function() {
            setTimeout(updateEditorInput, 100);
        });

        // Handle form submission
        const productForm = document.querySelector('.product-form');
        if (productForm) {
            productForm.addEventListener('submit', function(e) {
                updateEditorInput();
            });
        }

        // Save button functionality
        const saveBtn = document.querySelector('.btn-save');
        if (saveBtn) {
            saveBtn.addEventListener('click', function(e) {
                e.preventDefault();
                updateEditorInput();
                console.log('Lưu sản phẩm:', {
                    description: editorInput.value
                });
                // Thêm logic lưu ở đây
            });
        }
    });
</script>
@endsection
