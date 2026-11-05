@extends('admin.layout')

@section('title', 'Articles - NovaNews Admin')

@push('styles')
    @vite('resources/css/admin/news.css')
@endpush

@section('content')
<div class="admin-layout">
    @include('admin.menu.menu')
    <main class="main-content">
        @include('admin.main.news')
    </main>
</div>
@endsection
