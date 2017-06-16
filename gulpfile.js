'use strict';

var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.copy('bower_components/metaphor/dist/css/metaphor.css', 'public/css/metaphor.css')
  mix.copy('bower_components/metaphor/dist/js/metaphor.js', 'public/js/metaphor.js')
  mix.sass('app.scss', 'public/css', 'resources/assets/sass');
  mix.scripts('app.js', 'public/js', 'resources/assets/js');
});