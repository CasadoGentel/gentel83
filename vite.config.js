import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['storage/app/public/scss/style.css', 'storage/app/public/js/app.js'],
            refresh: true,
        }),
    ],
});
