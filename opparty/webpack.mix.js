const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.

 mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
 |
 */

// Events modules
mix.js('resources/js/modules/events/main.js', 'public/js/modules/events/')
    .vue()
    .sass('resources/sass/modules/events/main.scss', 'public/css/modules/events/');
