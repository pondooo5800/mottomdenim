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

// mix.webpackConfig({
//     stats: {
//          children: true
//     }
// });

let productionSourceMaps = true;
    mix.js('resources/js/app.js', 'public/js').vue()
    // .sass('public/assets/front/scss/black.scss', 'public/assets/front/css/',  [
    //     //
    // ])

//    .sass('public/assets/scss/style.scss', 'public/assets/css/',  [
//         //
//     ])
    .sourceMaps(productionSourceMaps, 'source-map');
