@extends('admin.layout')

@section('title', 'Products - NovaNews Admin')

@push('styles')
    @vite('resources/css/admin/products.css')
@endpush

@section('content')
<div class="admin-layout">
    @include('admin.menu.menu')
    <main class="main-content">
        @include('admin.main.products')
    </main>
</div>
@endsection
