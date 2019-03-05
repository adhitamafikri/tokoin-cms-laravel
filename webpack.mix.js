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
const sass_app = 'resources/sass/app.scss';
const sass_pages = 'resources/sass/pages';

const css_path = 'public/css';

mix.js('resources/js/app.js', 'public/js')
   .sass(sass_app, css_path)
   .sass(`${sass_pages}/home.scss`, css_path)
   .sass(`${sass_pages}/partners.scss`, css_path);

mix.copyDirectory('resources/css', 'public/css')
   .copyDirectory('resources/img', 'public/img')
   .copyDirectory('resources/vendor', 'public/vendor');

if(mix.inProduction()) {
   mix.version();
}
