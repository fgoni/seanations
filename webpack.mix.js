const mix = require('laravel-mix');
var tailwindcss = require('tailwindcss');

mix.sass('resources/sass/main.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('tailwind.js')],
    });