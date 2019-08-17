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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/delete_tag.js', 'public/js/delete_tag.js')
    .js('resources/js/delete_post.js', 'public/js/delete_post.js')
    .js('resources/js/upload_image.js', 'public/js/upload_image.js')
    .js('resources/js/show_comment.js', 'public/js/show_comment.js')
    .js('resources/js/delete_user.js', 'public/js/delete_user.js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/simplemde/dist/simplemde.min.js', 'public/js/simplemde.js')
    .copy('node_modules/simplemde/dist/simplemde.min.css', 'public/css/simplemde.css')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
    .copy('node_modules/datatables.net/js/jquery.dataTables.js', 'public/js/jquery.dataTables.js')
    .copy('node_modules/datatables.net-dt/css/jquery.dataTables.css', 'public/css/jquery.dataTables.css');
mix.autoload({
    jquery: ['$', 'global.jQuery',"jQuery","global.$","jquery","global.jquery"]
});
