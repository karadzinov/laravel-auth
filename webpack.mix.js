const { mix } = require('laravel-mix');

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


mix.styles([
    'public/css/style.css',
    'public/css/font-awesome.min.css',
    'public/css/main.css',
    'public/css/bundle.css',
    'public/css/custom.css'
], 'public/css/all.css');


mix.scripts([
    'public/js/bundle.js',
    'public/js/fury.js'
], 'public/js/all.js');