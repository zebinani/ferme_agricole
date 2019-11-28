const mix = require('laravel-mix');

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

mix.js(['resources/js/app.js','resources/js/login/main.js'],'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/modern-business.css','resources/css/login/main.css','resources/css/login/util.css'],'public/css/all.css');
