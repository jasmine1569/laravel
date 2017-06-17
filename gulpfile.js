'use strict';

var elixir = require('laravel-elixir');

// Elixir Configurations
elixir.config.assetsPath = 'sass';
elixir.config.publicPath = 'dist';

var bowerPath = '../bower_components';

elixir(function(mix) {

  mix.copy('bower_components/metaphor/dist/css/metaphor.css', 'public/css/metaphor.css');
  mix.copy('bower_components/metaphor/dist/js/metaphor.js', 'public/js/metaphor.js');
  mix.copy('bower_components/font-awesome/scss', 'resources/assets/vendor/font-aweseome');
  mix.copy('bower_components/font-aweseome/fonts',  'public/fonts');


  
  mix.sass('style.scss', 'public/css', 'resources/assets/sass');
  mix.scripts('script.js', 'public/js', 'resources/assets/js');
});