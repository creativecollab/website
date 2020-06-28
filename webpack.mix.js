const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
const dev = 'resources/views/web/assets/';
const web = 'public/web/assets/';

mix
  .sass(dev + 'scss/app.scss', web + 'css/app.css')
  // .styles([
  //   dev + 'css/flaticon.css',
  //   dev + 'css/animate.min.css',
  //   dev + 'css/bootstrap.min.css',
  //   dev + 'css/bootstrap-select.min.css',
  //   dev + 'css/owl.carousel.min.css',
  //   dev + 'css/jquery.fancybox.min.css',
  //   dev + 'css/perfect-scrollbar.css',
  //   dev + 'css/slick.css',
  //   dev + 'css/responsive.css',
  //   dev + 'css/color.css',
  // ], web + 'css/plugins.css')
  //
  // .styles([
  //   dev + 'css/revolution/settings.css',
  //   dev + 'css/revolution/layers.css',
  //   dev + 'css/revolution/navigation.css'
  // ], web + 'css/rs-plugins.css')

  // .scripts([dev +  'js/jquery.min.js'], web + 'js/jquery.js')
  // .scripts([dev +  'js/bootstrap.min.js'], web + 'js/bootstrap.js')
  // .scripts([dev +  'js/bootstrap-select.min.js'], web + 'js/bs-select.js')
  // .scripts([
  //   dev +  'js/popper.min.js',
  //   dev +  'js/owl.carousel.min.js',
  //   dev +  'js/scroll-up-bar.min.js',
  //   dev +  'js/jquery.fancybox.min.js',
  //   dev +  'js/counterup.min.js',
  //   dev +  'js/perfect-scrollbar.min.js',
  //   dev +  'js/slick.min.js',
  //   dev +  'js/particles.min.js',
  //   dev +  'js/particle-int.js',
  // ], web + 'js/plugins.js')
  //
  // .scripts([dev +  'js/custom-scripts.js'], web + 'js/app.js')



  // .scripts([
  //   dev + 'js/revolution/jquery.themepunch.revolution.min.js',
  //   dev + 'js/revolution/jquery.themepunch.tools.min.js',
  // ], web + 'js/plugins/rs-themepunch.js')
  //
  // .scripts([
  //       dev + 'js/revolution/extensions/revolution.extension.actions.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.carousel.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.kenburn.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.layeranimation.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.migration.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.navigation.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.parallax.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.slideanims.min.js',
  //       dev + 'js/revolution/extensions/revolution.extension.video.min.js',
  //   ], web + 'js/plugins/rs-plugins.js')

  .scripts([dev + 'js/revolution/revolution-init.js'], web + 'js/plugins/rs-init.js')

    .copyDirectory(dev + 'css/revolution', web + 'css/revolution')
    .copyDirectory(dev + 'fonts', web + 'fonts')
    .copyDirectory(dev + 'webfonts', web + 'webfonts')
    .copyDirectory(dev + 'images', web + 'images')

    .options({
        processCssUrls: false
    })

    .version()
