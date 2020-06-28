@extends('web.layout.app')
@section('content')
  <section>
    <div class="w-100 pt-60 position-relative">
      <div class="fixed-bg bg-creative-color1" style="background-image: url(assets/images/bg10.jpg); height: 80vh;"></div>
      <div class="container">
        <div class="page-title-wrap text-center w-100 d-inline-block">
          <div class="page-title-inner d-inline-block">
            <h2 class="mb-0 text-color7">Desenvolvimento Web</h2>
            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod
              tempor incididunt ut labore et dolore</p>
          </div>
          <div class="breadcrumbs-wrap w-100">
            <ul class="breadcrumbs mb-0 list-unstyled d-inline-flex">
              <li><a href="{{ route('web.home') }}" title="Home">Home</a></li>
              <li><a href="{{ route('web.services') }}" title="Home">Soluções</a></li>
              <li class="active">Desenvolvimento Web</li>
            </ul><!-- Breadcrumbs -->
          </div>
        </div><!-- Page Title Wrap -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 pt-40 pb-100 position-relative">
      <div id="particles1" class="particles-js top-left" data-color="#ffe27a" data-saturation="300" data-size="40"
           data-count="8" data-speed="2" data-hide="770" data-image="assets"></div>
      <div class="container">
        <div class="about-wrap6 w-100">
          <div class="row align-items-center">
            <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
              <img class="img-fluid mt-40" src="{{ url(asset('web/assets/images/resources/about-mckp5.jpg')) }}" alt="About Mockup 5">
            </div>
            <div class="col-md-12 col-sm-12 col-lg-5">
              <div class="about-desc6 w-100 mt-40">
                <h2 class="mb-0">Client's Business As Is Own</h2>
                <ul class="mb-0 list-unstyled">
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                  </li>
                </ul>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore</p>
                <a class="icon-btn theme-btn icon-right fill-btn2"
                   href="{{ route('web.contact')}}" title="Read More"><i
                    class="metaicon-028-arrow-metamax"></i>FALE CONOSCO<i class="metaicon-028-arrow-metamax"></i></a>
              </div>
            </div>
          </div>
        </div><!-- About Wrap 5 -->
      </div>
    </div>
  </section>



    <section>
      <div class="w-100 py-100 position-relative">
        <div id="particles2" class="particles-js top-left" data-color="#ffe27a" data-saturation="300" data-size="40"
             data-count="8" data-speed="2" data-hide="770" data-image="assets"></div>
        <div class="container">
          <div class="sec-title2 mb-70 text-center w-100">
            <div class="d-inline-block">
              <h2 class="mb-0 text-uppercase text-color2"><span>ETAPAS DO</span>PROJETO</h2>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod
                tempor</p>
            </div>
          </div><!-- Section Title Style 2 -->
          <div
            class="roadmap-wrap text-center w-100 position-relative d-flex flex-nowrap flex-row justify-content-between align-items-start">
            <div class="roadmap-item color1 position-relative">
                          <span class="d-inline-block position-absolute roadmap-icon"><i
                              class="metaicon-search-1"></i></span>
              <span class="d-inline-block roadmap-label"><i class="font-style-normal">01</i></span>
              <h5 class="mb-0">BRIEFING</h5>
            </div>
            <div class="roadmap-item color2 position-relative">
              <span class="d-inline-block position-absolute roadmap-icon"><i class="metaicon-idea"></i></span>
              <span class="d-inline-block roadmap-label"><i class="font-style-normal">02</i></span>
              <h5 class="mb-0">PLANEJAMENTO</h5>
            </div>
            <div class="roadmap-item color3 position-relative">
                          <span class="d-inline-block position-absolute roadmap-icon"><i
                              class="metaicon-analytics"></i></span>
              <span class="d-inline-block roadmap-label"><i class="font-style-normal">03</i></span>
              <h5 class="mb-0">CRIAÇÃO</h5>
            </div>
            <div class="roadmap-item color4 position-relative">
              <span class="d-inline-block position-absolute roadmap-icon">
                <i class="metaicon-analytics-1"></i>
              </span>
              <span class="d-inline-block roadmap-label">
                <i class="font-style-normal">04</i>
              </span>
              <h5 class="mb-0">DEPLOY</h5>
            </div>
          </div><!-- Roadmap Wrap -->
        </div>
      </div>
    </section>
    <section>
  <section>
    <div class="w-100 pt-90 pb-120 position-relative">
      <div id="particles2" class="particles-js top-left" data-color="#ffe27a" data-saturation="300" data-size="40"
           data-count="8" data-speed="2" data-hide="770" data-image="assets"></div>
      <div class="container">
        <div class="result-wrap w-100">
          <div class="row align-items-center">
            <div class="col-md-12 col-sm-12 col-lg-4">
              <div class="result-desc w-100">
                <h2 class="mb-0">leve seu negócio para o próximo Nível</h2>
                <p class="mb-0">Nam consectetur metus ipsum, ac vestibulum nisl tempor a. Sed consectetur ante id nunc
                  tempor auctor. Nullam pulvinar ac metus sed faucibus.</p>
                <a class="theme-btn fill-btn2"
                   href="{{ route('web.contact') }}"
                   title="">
                  Fale Conosco
                </a>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-8">
              <div class="service-wrap7 w-100">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="service-box7 d-flex flex-wrap w-100 brd-rd20">
                      <i class="metaicon-line-chart-1"></i>
                      <div class="service-info7">
                        <h3 class="mb-0">Site</h3>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="service-box7 d-flex flex-wrap w-100 brd-rd20">
                      <i class="metaicon-line-chart-1"></i>
                      <div class="service-info7">
                        <h3 class="mb-0">Blog</h3>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="service-box7 d-flex flex-wrap w-100 brd-rd20">
                      <i class="metaicon-line-chart-1"></i>
                      <div class="service-info7">
                        <h3 class="mb-0">130+ Businesses consultated</h3>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="service-box7 d-flex flex-wrap w-100 brd-rd20">
                      <i class="metaicon-line-chart-1"></i>
                      <div class="service-info7">
                        <h3 class="mb-0">130+ Businesses consultated</h3>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="service-box7 d-flex flex-wrap w-100 brd-rd20">
                      <i class="metaicon-line-chart-1"></i>
                      <div class="service-info7">
                        <h3 class="mb-0">130+ Businesses consultated</h3>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="service-box7 d-flex flex-wrap w-100 brd-rd20">
                      <i class="metaicon-line-chart-1"></i>
                      <div class="service-info7">
                        <h3 class="mb-0">130+ Businesses consultated</h3>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div><!-- Result Wrap -->
      </div>
    </div>
  </section>
@endsection
