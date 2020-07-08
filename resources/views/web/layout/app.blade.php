<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon"
          href="{{ url(asset('web/assets/images/icon.png')) }}"
          sizes="32x32"
          type="image/png"/>
    <title>Creative Collab – Sua Agência Marketing Digital</title>

{{--    <link rel="stylesheet" href="{{ url(asset('web/assets/css/all.min.css')) }}">--}}
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/flaticon.css')) }}">

    <link rel="stylesheet" href="{{ url(asset('web/assets/css/boot.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/libs/plugins.css')) }}">
  <link rel="stylesheet" href="{{ url(mix('web/assets/css/app.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/style.css')) }}">


    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/revolution/settings.css')) }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/revolution/layers.css')) }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/revolution/navigation.css')) }}">
</head>
<body>
{{--<div id="mta-page-loader-container" class="mta-loader-container style1">--}}
{{--  <div id="mta-page-loader" class="mta-loader">--}}
{{--    <div class="inner"></div>--}}
{{--    <img class="loader-logo" src="{{ url(asset('web/assets/images/logo-creative-collab.png')) }}" alt="Loader Logo">--}}
{{--  </div>--}}
{{--</div>--}}
<header class="stick style1 logo-left">
  <div class="container d-flex flex-row justify-content-between flex-nowrap">
    <div class="header-nav-wrap w-100">
      <nav class="nav-wrap d-flex flex-row align-items-center justify-content-between flex-nowrap">
        <div class="menu-wrap d-flex flex-row justify-content-start flex-nowrap w-100">
          <div class="logo">
            <a class="desktop-logo"
               href="{{ route('web.home') }}" title="Home">
              <img class="default-logo img-fluid"
                   src="{{  url(asset('web/assets/images/brand-white.png')) }}"
                   alt="Logo" srcset="{{ url(asset('web/assets/images/brand-white.png'))  }} 2x">
              <img class="sticky-logo img-fluid"
                   src="{{ url(asset('web/assets/images/brand.png'))  }}" alt="Logo"
                   srcset="{{ url(asset('web/assets/images/brand.png'))  }} 2x">
            </a>
          </div><!-- Logo -->
          <div class="menu d-flex flex-row align-items-center justify-content-end flex-nowrap w-100">
            <ul class="main-menu mb-0 list-unstyled d-flex flex-row align-items-center justify-content-start flex-wrap">
              <li><a href="{{ route('web.home') }}">Home</a></li>
              <li><a href="{{ route('web.about') }}" title="">A Agência</a></li>
              <li class="menu-item-has-children active">
                <a href="{{ route('web.services') }}"
                   title="">Soluções</a>
                <div class="megamenu">
                  <div class="row mrg40">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                      <h4>Desenvolvimento</h4>
                      <ul class="mb-0 list-unstyled">
                        <li><a href="{{ route('web.services.sites') }}" title="">Sites</a></li>
                        <li><a href="#" title="">Lojas Virtuais</a></li>
                        <li><a href="#" title="">Blogs</a></li>
                        <li><a href="#" title="">Sistemas Web</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                      <h4>Design</h4>
                      <ul class="mb-0 list-unstyled">
                        <li><a href="#" title="">Servico 1</a></li>
                        <li><a href="#" title="">Servico 2</a></li>
                        <li><a href="#" title="">Servico 3</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                      <h4>Markenting</h4>
                      <ul class="mb-0 list-unstyled">
                        <li><a href="#" title="">Consulturia</a></li>
                        <li><a href="#" title="">Planejamento Extratégico</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              <li><a href="{{ route('web.contact') }}" title="">Contato</a></li>
            </ul>
          </div><!-- Menu -->
        </div><!-- Menu Wrap -->
      </nav>
    </div><!-- Header Nav Wrap -->
  </div>
</header><!-- Header -->

<div class=" responsive-header w-100">
  <div class="stick responsive-topbar w-100">
    <div class="container d-flex flex-wrap justify-content-between">

      <div class="logo">
        <a href="{{ route('web.home') }}" title="Home">
          <img class="img-fluid" width="60" height="60" src="{{ url(asset('web/assets/images/brand-footer.png')) }}" alt="Logo"></a>
      </div><!-- Logo -->

      <div class="menu-right-icons text-white d-flex flex-row align-items-center justify-content-end flex-nowrap">
        <span class="responsive-menu-btn position-relative">
          <i class="fas fa-align-justify text-color2"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="responsive-menu">
    <div class="logo d-inline-flex w-100 justify-content-center">
      <a href="index.html" title="Home">
        <img
          width="60" height="60"
          class="img-fluid"
          src="{{ url(asset('web/assets/images/brand-footer.png')) }}"
          alt="Logo">
      </a>
    </div>
    <ul class="mb-0 list-unstyled">
      <li><a href="{{ route('web.home') }}">Home</a></li>
      <li><a href="{{ route('web.about') }}" title="">A Agência</a></li>
      <li class="menu-item-has-children">
        <a href="{{ route('web.services') }}" title="">Soluções</a>
        <ul class="children mb-0 list-unstyled">
          <li class="menu-item-has-children">
            <a href="javascript:void(0);" title="">Desenvolvimento</a>
            <ul class="children mb-0 list-unstyled">
              <li><a href="{{ route('web.services.sites') }}" title="">Sites</a></li>
              <li><a href="{{ route('web.services.blogs') }}" title="">Blogs</a></li>
              <li><a href="{{ route('web.services.ecommerce') }}" title="">Loja Virtuais</a></li>
              <li><a href="{{ route('web.services.web') }}" title="">Sistemas Web</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="javascript:void(0);" title="">Design</a>
            <ul class="children mb-0 list-unstyled">
              <li><a href="#" title="">Servico 1</a></li>
              <li><a href="#" title="">Servico 2</a></li>
              <li><a href="#" title="">Servico 3</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="javascript:void(0);" title="">Marketing</a>
            <ul class="children mb-0 list-unstyled">
              <li><a href="#" title="">Servico 1</a></li>
              <li><a href="#" title="">Servico 2</a></li>
              <li><a href="#" title="">Servico 3</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li><a href="{{ route('web.contact') }}" title="">Contato</a></li>
    </ul>
  </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->
<main>
    @yield('content')
</main>

<footer>
  <div class="w-100 pt-70  text-color15 position-relative">
    <div class="scroll-top-btn position-absolute"><a href="javascript:void(0);" title=""><i class="metaicon-arrow-pointing-to-up"></i></a></div>
    <div class="container">
      <div class="footer-wrap d-flex flex-wrap w-100">
        <div class="footer-about">
          <div class="logo d-block">
            <a href="index.html" title="Home"><img class="img-fluid" src="assets/images/footer-logo.png" alt="Footer Logo"></a>
          </div><!-- Logo -->
          <p class="mb-0">We’re on a mission to build a better future where technology creates good jobs for everyone.</p>
        </div><!-- Footer About -->
        <div class="footer-widget-wrap">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="widget w-100">
                <h4 class="text-white">Contact</h4>
                <ul class="mb-0 list-unstyled">
                  <li><a href="javascript:void(0);" title="">Installation</a></li>
                  <li><a href="javascript:void(0);" title="">Loging in</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="widget w-100">
                <h4 class="text-white">Links</h4>
                <ul class="mb-0 list-unstyled">
                  <li><a href="about.html" title="">About us</a></li>
                  <li><a href="services.html" title="">Services</a></li>
                  <li><a href="javascript:void(0);" title="">Projects</a></li>
                  <li><a href="javascript:void(0);" title="">Our Team</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="widget w-100">
                <h4 class="text-white">Links</h4>
                <ul class="mb-0 list-unstyled">
                  <li><a href="contact.html" title="">Contact us</a></li>
                  <li><a href="blog-2column.html" title="">Blog</a></li>
                  <li><a href="javascript:void(0);" title="">Testimonials</a></li>
                  <li><a href="javascript:void(0);" title="">FAQ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
              <!--Newslatter Form-->
              <div class="widget w-100" id="email-form">
                <h4 class="text-white">Subscribe</h4>
                <form class="position-relative w-100" method="post" action="#" id="subscribe-form">
                  <div class="form-group"><div class="response"></div></div>

                  <input type="email" name="email" class="email" value="" placeholder="Your Email">
                  <button type="button" id="subscribe-newslatters"><i class="metaicon-send-button"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- Footer Wrap -->
      <div class="footer-content-wrap align-items-center d-flex justify-content-between flex-wrap w-100">
        <div class="footer-content-inner">
          <ul class="mb-0 d-flex list-unstyled">
            <li class="text-white"><a href="8006000020" title="">
                <i class="fas fa-phone-alt text-color15"></i>800 - 600 - 0020</a></li>
            <li class="text-white">
              <i class="far fa-map text-color15"></i>Brasília, BSB</li>
          </ul>
        </div>
        <div class="scl-links2">

          <a href="javascript:void(0);"
             title="Instagram" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>

          <a href="javascript:void(0);" title="Facebook"
             target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
        </div>
      </div><!-- Footer Content Wrap -->
      <div class="copyright w-100">
        <p class="mb-0">Copyright &copy; 2020. All Right Reserved.</p>
      </div><!-- Copyright -->
    </div>
  </div>
</footer>
<!-- Main Wrapper -->

<script src="{{ url(asset('web/assets/js/jquery.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/slide.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/popper.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/bootstrap.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/bootstrap-select.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/owl.carousel.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/scroll-up-bar.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/jquery.fancybox.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/counterup.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/perfect-scrollbar.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/slick.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/particles.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/particle-int.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/custom-scripts.js')) }}"></script>

{{--<script src="{{ url(asset('web/assets/js/jquery.js')) }}"></script>--}}
{{--<script src="{{ url(asset('web/assets/js/plugins.js')) }}"></script>--}}
{{--<script src="{{ url(asset('web/assets/js/bootstrap.js')) }}"></script>--}}
{{--<script src="{{ url(asset('web/assets/js/bs-select.js')) }}"></script>--}}
{{--<script src="{{ url(asset('web/assets/js/app.js')) }}"></script>--}}

    <script src="{{ url(asset('web/assets/js/revolution/jquery.themepunch.tools.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/jquery.themepunch.revolution.min.js'))}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.actions.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.carousel.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.kenburn.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.layeranimation.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.migration.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.navigation.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.parallax.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.slideanims.min.js'))}}"></script>
    <script src="{{ url(asset('web/assets/js/revolution/extensions/revolution.extension.video.min.js'))}}"></script>

{{--<script src="{{ url(asset('web/assets/js/revolution/revolution-init.js'))}}"></script>--}}

{{--<script src="{{ url(asset('web/assets/js/plugins/rs-plugins.js')) }}"></script>--}}
<script src="{{ url(asset('web/assets/js/plugins/rs-init.js')) }}"></script>
{{--<script src="{{ url(asset('web/assets/js/custom-scripts.js')) }}"></script>--}}
</body>
</html>
