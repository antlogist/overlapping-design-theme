const mix = require("laravel-mix");

mix.sass("resources/assets/sass/app.scss", "dist/css/all.css");
mix.sass("resources/assets/sass/libs.scss", "dist/css/libs.css");
