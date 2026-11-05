<!DOCTYPE html>
<html lang="vi">
<head>
    @include('admin.menu.head-root-admin')
    @vite(['resources/css/app.css', 'resources/css/admin/dashboard.css', 'resources/js/app.js'])
    @stack('styles')
    @vite('resources/css/admin/menu.css')
</head>
<body>
    @yield('content')
    @include('admin.menu.scripts-root-admin')
</body>
</html>
