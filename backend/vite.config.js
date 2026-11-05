import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/admin/dashboard.css',
                'resources/css/admin/menu.css',
                'resources/css/admin/news.css',
                'resources/css/admin/products.css',
                'resources/css/admin/videos.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
