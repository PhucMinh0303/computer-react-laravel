@extends('admin.layout')

@section('title', 'Dashboard - NovaNews Admin')

@section('content')
<div class="admin-layout">
    @include('admin.menu.menu')
    <main class="main-content">
        @include('admin.main.dashboard')
    </main>
</div>
@endsection
