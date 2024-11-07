const mix = require('laravel-mix');
const webpack = require('webpack');

// Вимкнути сповіщення
mix.webpackConfig({
    plugins: [
        new webpack.IgnorePlugin({
            resourceRegExp: /^node-notifier$/,
        }),
    ],
});

// Додаємо Bootstrap CSS
mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
], 'public/css/bootstrap.css');

// Додаємо Bootstrap JS
mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    ], 'public/js/bootstrap.js');

// Компонуємо ваші стилі та скрипти
mix.sass('resources/sass/app.scss', 'public/css')
    .version();
