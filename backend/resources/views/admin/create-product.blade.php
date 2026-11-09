@extends('admin.layout')

@section('title', 'create-products - NovaNews Admin')

@push('styles')
    @vite('resources/css/admin/addition/create-products.css')
@endpush

@section('content')
<div class="admin-layout">
    @include('admin.menu.menu')
    <main class="main-content">
        @include('admin.addition.create-products')
    </main>
</div>
@endsection
