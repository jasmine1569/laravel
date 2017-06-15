'use strict';

var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.sass('app.scss', 'public/css', 'resources/assets/sass');
  mix.scripts('app.js', 'public/js', 'resources/assets/js');
});