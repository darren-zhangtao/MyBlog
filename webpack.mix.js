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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/home/home.scss', 'public/css/home')
    .sass('resources/assets/sass/app.scss', 'public/css')

    .sass('resources/assets/sass/default/head.scss', 'public/css/default')
    .sass('resources/assets/sass/article/article_list.scss', 'public/css/article')
    .sass('resources/assets/sass/picture/picture_content.scss', 'public/css/picture');
