import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import path from 'path';

export default defineConfig({
    plugins: [
        vue({
            template: {
                compilerOptions: {
                    isCustomElement: (tag) => {
                        return tag.startsWith('router-') // (return true)
                    }
                }
            }
        }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias:{
            '@/': path.join(__dirname, '/resources/'),
            '@src':path.join(__dirname,"/resources/src"),
            '~': path.join(__dirname, '/node_modules/'),
        },
    },
});
