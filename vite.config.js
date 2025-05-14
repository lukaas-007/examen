import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/add_wolf.css',
                'resources/css/overview.css', 
                'resources/js/app.js',
                'resources/js/add_wolf.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
