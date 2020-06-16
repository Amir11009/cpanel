let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.combine([
    'resources/assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css',
    'resources/assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css',
    'resources/assets/vendor/lightgallery-1.6.12/css/lightgallery.min.css',
    'resources/assets/css/style.css',
    'resources/assets/vendor/fontawesome-5.6.3/css/all.min.css',
    'resources/assets/fonts/stroyka/stroyka.css',
], 'public/assets/css/app.css');

mix.combine([
    'resources/assets/vendor/jquery-3.3.1/jquery.min.js',
    'resources/assets/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js',
    'resources/assets/vendor/owl-carousel-2.3.4/owl.carousel.min.js',
    'resources/assets/vendor/nouislider-12.1.0/nouislider.min.js',
    'resources/assets/vendor/lightgallery-1.6.12/js/lightgallery.min.js',
    'resources/assets/vendor/lightgallery-1.6.12/js/lg-thumbnail.min.js',
    'resources/assets/vendor/lightgallery-1.6.12/js/lg-zoom.min.js',
    'resources/assets/js/number.js',
    'resources/assets/vendor/svg4everybody-2.1.9/svg4everybody.min.js',
    'resources/assets/js/main.js',
],'public/assets/js/app.js');