import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                 //icon
            'public/css/all.min.css',
            //<!-- Custom fonts for this template-->
            'public/css/sb-admin-2.min.css',

            //<!-- Custom styles for this template-->
            'public/vendor/fontawesome-free/css/all.min.css',

            //<!-- Bootstrap core JavaScript-->
            'public/vendor/jquery/jquery.min.js',
            'public/vendor/bootstrap/js/bootstrap.bundle.min.js',

            //<!-- Core plugin JavaScript-->
            'public/vendor/jquery-easing/jquery.easing.min.js',

            //    <!-- Custom scripts for all pages-->
            'public/js/sb-admin-2.min.js',
            
            //<!-- Page level plugins -->
            'public/vendor/chart.js/Chart.min.js',

            //<!-- Page level custom scripts -->
            'public/js/demo/chart-area-demo.js',
            'public/js/demo/chart-pie-demo.js',
   
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
