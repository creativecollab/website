@extends('web.layout.app')
@section('content')
  <section>
    <div class="w-100 pt-60 position-relative bg-creative-color1" >
      <div class="fixed-bg" style="background-image:url( {{ url(asset('web/assets/images/bg10.jpg')) }} );"></div>
      <div class="container">
        <div class="page-title-wrap text-center w-100 d-inline-block">
          <div class="page-title-inner d-inline-block">
            <h2 class="mb-0 text-color7">Nossas Soluções</h2>
            <p class="mb-0 text-white">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              <br> sed do eiusmod
              tempor incididunt ut labore et dolore</p>
          </div>
          <div class="breadcrumbs-wrap w-100">
            <ul class="breadcrumbs mb-0 list-unstyled d-inline-flex">
              <li><a class="text-color1" href="{{ route('web.home') }}" title="Home">Home</a></li>
              <li class="active">Soluções</li>
            </ul><!-- Breadcrumbs -->
          </div>
        </div><!-- Page Title Wrap -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 py-100">
      <div class="container">
        <div class="service-wrap w-100">
          <ul class="mb-0 list-unstyled d-flex flex-wrap w-100">
            <li>
              <div class="service-box-wrap">
                <div class="service-box">
                  <span class="icon"></span>
                  <div class="service-info">
                    <i class="font-style-normal">01</i>
                    <h3 class="mb-0">Sistemas Web</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any create
                      awareness drive</p>
                    <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="service-box-wrap">
                <div class="service-box">
                            <span class="icon"></span>
                  <div class="service-info">
                    <i class="font-style-normal">02</i>
                    <h3 class="mb-0">Lojas Virtuais</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any create
                      awareness drive</p>
                    <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="service-box-wrap">
                <div class="service-box">
                  <span class="icon"></span>
                  <div class="service-info">
                    <i class="font-style-normal">03</i>
                    <h3 class="mb-0">Indentidade Visual</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any create
                      awareness drive</p>
                    <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="service-box-wrap">
                <div class="service-box">
                  <span class="icon"></span>
                  <div class="service-info">
                    <i class="font-style-normal">04</i>
                    <h3 class="mb-0">Mídias Gráficas</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any create
                      awareness drive</p>
                    <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="service-box-wrap">
                <div class="service-box">
                  <span class="icon"></span>
                  <div class="service-info">
                    <i class="font-style-normal">05</i>
                    <h3 class="mb-0">Markenting Digital</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any create
                      awareness drive</p>
                    <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="service-box-wrap">
                <div class="service-box">
                  <span class="icon"></span>
                  <div class="service-info">
                    <i class="font-style-normal">06</i>
                    <h3 class="mb-0">Planejamento Extratégico</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any create
                      awareness drive</p>
                    <a class="service-btn"
                       href="javascript:void(0);"
                       title="">Saiba +</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div><!-- Service Wrap -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 py-86 bg-color5 position-relative">
      <div class="bg-waves">
        <div class="wave wave-bottom-left">
          <img class="layer" src="assets/images/bottom-left2.png" alt="bottom-left2">
          <img class="layer" src="assets/images/bottom-left1.png" alt="bottom-left1">
        </div>
        <div class="wave wave-bottom-right">
          <img class="layer" src="assets/images/bottom-right2.png" alt="bottom-right2">
          <img class="layer" src="assets/images/bottom-right1.png" alt="bottom-right1">
        </div>
      </div>
      <div class="container">
        <div class="service-wrap8 position-relative w-100">
          <h2 class="mb-0">Nossa lista de Serviços </h2>
          <div class="service-inner w-100">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block"
                     href="javascript:void(0);" title="">SEO</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Sites</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Blogs</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Paineis De Controle</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Otimização de Sites</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Adaptação Visual</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Facebook Ads</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Instagram Ads</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Logo</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Flyers</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Gerenciamento de Redes Sociais</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="service-box8 mt-30 w-100 overflow-hidden">
                  <a class="d-block" href="javascript:void(0);" title="">Remarkenting/Retarget</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- Service Wrap 8 -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 pt-30 pb-120 position-relative">
      <div id="particles1" class="particles-js top-left" data-color="#ffe27a" data-saturation="300" data-size="40"
           data-count="8" data-speed="2" data-hide="770" data-image="assets"></div>
      <div class="container">
        <div class="choos-wrap w-100">
          <div class="row align-items-center">
            <div class="col-md-7 col-sm-12 col-lg-7 order-md-1">
              <img class="img-fluid w-100 brd-rd20 mt-40" src="assets/images/resources/choos-img.png"
                   alt="Choose Image">
            </div>
            <div class="col-md-5 col-sm-12 col-lg-5">
              <div class="choos-desc w-100 mt-40">
                <h2>Why Choose</h2>
                <div class="choos-box w-100 d-flex flex-wrap">
                  <i class="metaicon-check-mark"></i>
                  <div class="choos-info">
                    <h3 class="mb-0">Link Building</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any</p>
                  </div>
                </div>
                <div class="choos-box w-100 d-flex flex-wrap">
                  <i class="metaicon-check-mark"></i>
                  <div class="choos-info">
                    <h3 class="mb-0">Media Promotion</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any</p>
                  </div>
                </div>
                <div class="choos-box w-100 d-flex flex-wrap">
                  <i class="metaicon-check-mark"></i>
                  <div class="choos-info">
                    <h3 class="mb-0">Onsite SEO</h3>
                    <p class="mb-0">Start working with an company that provide everything you need to any</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- Choose Wrap -->
      </div>
    </div>
  </section>
@endsection
