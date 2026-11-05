@extends('admin.layout')

@section('title', 'Videos - NovaNews Admin')

@push('styles')
    @vite('resources/css/admin/videos.css')
@endpush

@section('content')
<div class="admin-layout">
    @include('admin.menu.menu')
    <main class="main-content">
        @include('admin.main.videos')
    </main>
</div>
@endsection
