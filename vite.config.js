import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/app.scss',
                'resources/css/index.scss',
                'resources/js/app.js',
                'resources/js/bg.js',
                'resources/css/casas.scss',
                'resources/css/nosotros.scss',
                'resources/css/experiencia.scss'
            ],
            refresh: true,
        }),
    ],
});
