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
    mix.sass('app.scss');
    //my personal Javascrpit for helper functions
    mix.copy('resources/assets/js/JQ.js', 'public/js');
    mix.copy('resources/assets/js/alertify.js', 'public/js');
    mix.copy([
        'resources/assets/sass/alertify.default.css',
        'resources/assets/sass/alertify.core.css'
    ], 'public/css');
});
