var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass('app.scss')
        .copy('resources/vendor/materialize/font', 'public/build/font')
        .scripts([
            '/../vendor/jquery/dist/jquery.min.js',
            '/../vendor/materialize/dist/js/materialize.min.js'
        ], 'public/js/app.js', 'resources/js')
        .version(["css/app.css", "js/app.js"]);
});
