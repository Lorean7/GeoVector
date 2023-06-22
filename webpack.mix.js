const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('postcss-import'),
        require('tailwindcss'),])
    .postCss('resources/css/main.css', 'public/css')
    .postCss('resources/css/vendors.css', 'public/css')
    // .js("resources/js/app.js", "public/js")
    .js("resources/js/vendors.js", "public/js")
    .js("resources/js/main.js", "public/js")
    // .js("resources/js/vendors.js", "public/js")
    // .js("resources/src/js/ckeditor-classic.js", "public/dist/js")
    // .js("resources/src/js/ckeditor-inline.js", "public/dist/js")
    // .js("resources/src/js/ckeditor-balloon.js", "public/dist/js")
    // .js("resources/src/js/ckeditor-balloon-block.js", "public/dist/js")
    // .js("resources/src/js/ckeditor-document.js", "public/dist/js")
    // .css("public/dist/css/_app.css", "public/dist/css/app.css")
    .options({
        processCssUrls: false,
    })
    .webpackConfig(require('./webpack.config'));

    // if (mix.inProduction()) {
        mix.version();
    // }
