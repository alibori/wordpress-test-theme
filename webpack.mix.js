let mix = require('laravel-mix');

mix
.js('src/assets/js/app.js', 'dist/')
.sass('src/assets/css/app.scss', 'dist/');