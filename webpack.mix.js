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

mix.js('resources/js/app.js', 'public/js/')
    .sass('resources/sass/app.scss', 'public/css/')

    /*=======Ecam Theme=======*/
    .sass('resources/assets/themes/ecam_theme/sass/ecam.theme.scss','public/assets/themes/ecam_theme/css/')
    .js('resources/assets/themes/ecam_theme/js/ecam.js','public/assets/themes/ecam_theme/js/ecam.js')

    /*=======Admin Js and Style Customize=====*/
    .sass('resources/sass/admins/vendor.scss','public/css/admins/')
    .sass('resources/sass/admins/main.scss','public/css/admins/')

    .js('resources/js/admins/vendor.js', 'public/js/admins/vendor.js')
    .js('resources/js/admins/main.js','public/js/admins/main.js')
    .js('resources/js/admins/pages/login.js','public/js/admins/pages/')
    .js('resources/js/admins/pages/dashboard.js','public/js/admins/pages/')
    .js('resources/js/admins/pages/navigations.js','public/js/admins/pages/')
    .js('resources/js/admins/pages/role.js','public/js/admins/pages/')
    .js('resources/js/admins/pages/permission.js','public/js/admins/pages/')
    .js('resources/js/admins/pages/user.js','public/js/admins/pages/')
    .js('resources/js/admins/pages/shop.js','public/js/admins/pages/')

    /*=======Website Js and Style Customize=====*/
    .sass('resources/sass/websites/theme.scss','public/css/websites/theme.css')
    .sass('resources/sass/websites/customize.scss','public/css/websites/customize.css')
    .sass('resources/sass/websites/pages/home.scss','public/css/websites/pages/home.css')
    .sass('resources/sass/websites/pages/category.scss','public/css/websites/pages/category.css')

    .js('resources/js/websites/vendor.js','public/js/websites/vendor.js')
    .sourceMaps();


if (mix.inProduction()) {
    mix.version();
}
