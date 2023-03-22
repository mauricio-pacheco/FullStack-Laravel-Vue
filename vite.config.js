// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';


export default defineConfig({
    plugins: [
        vue(),
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    resolve:{
        alias:{
            vue:'vue/dist/vue.esm-bundler.js'
        }
    }
});
