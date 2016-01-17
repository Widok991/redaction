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
    mix.scripts([
       'jquery-1.11.3.js',
        'bootstrap.min.js'
    ], 'public/assets/js/main.js');

    mix.styles([
        'animation.css',
        'authenty.css',
        'bootstrap.css',
        'font-awesome.css'
    ], 'public/assets/css/main.css');

    mix.version([
        'public/assets/js/main.js',
        'public/assets/css/main.css'
    ])
});
