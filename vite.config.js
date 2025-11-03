//import { defineConfig } from 'vite';
//import laravel from 'laravel-vite-plugin';
//import tailwindcss from '@tailwindcss/vite';

//export default defineConfig({
//    plugins: [
//        laravel({
//            input: ['resources/css/app.css', 'resources/js/app.js'],
//            refresh: true,
//        }),
//        tailwindcss(),
//    ],
//});


import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true, // enables Hot Module Reload
        }),
    ],
    base: './', // for correct relative paths if serving from subfolder
    build: {
        outDir: 'public/build', // optional, default is public/build
        emptyOutDir: true,
    },
});


