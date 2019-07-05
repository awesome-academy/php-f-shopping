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

mix.styles([
	'public/frontend/font/font.css',
	'public/frontend/css/base.css',
	'public/frontend/css/home/about.css',
	'public/frontend/css/home/banner.css',
	'public/frontend/css/home/footer.css',
	'public/frontend/css/home/header.css',
	'public/frontend/css/home/product.css',
	'public/frontend/css/home/productSelling.css',
	'public/frontend/css/home/recipe.css',
	'public/frontend/css/home/slide.css',
	], 'public/css/main.css')
   .js([
   	'public/frontend/js/common/common.js',
   	'public/frontend/js/product/productSelling.js',
   	'public/frontend/js/slide/slide.js',
   	], 'public/js/main.js')
    .options({
      processCssUrls: false
    });
