@extends('web.layout.app')
@section('content')
  <section>
    <div class="w-100 pt-60 position-relative">
      <div class="fixed-bg" style="background-image: url(assets/images/bg10.jpg);"></div>
      <div class="container">
        <div class="page-title-wrap text-center w-100 d-inline-block">
          <div class="page-title-inner d-inline-block">
            <h2 class="mb-0 text-color7">A Creative Collab</h2>
            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod
              tempor incididunt ut labore et dolore</p>
          </div>
          <div class="breadcrumbs-wrap w-100">
            <ul class="breadcrumbs mb-0 list-unstyled d-inline-flex">
              <li><a href="{{ route('web.home') }}" title="Home">Home</a></li>
              <li class="active">A Agência</li>
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
        <div class="about-wrap5 w-100">
          <div class="row align-items-center">
            <div class="col-md-7 col-sm-12 col-lg-7 order-md-1">
              <img class="img-fluid mt-40" src="assets/images/resources/about-mckp4.jpg" alt="About Mockup 4">
            </div>
            <div class="col-md-5 col-sm-12 col-lg-5">
              <div class="about-desc5 w-100 mt-40">
                <h2 class="mb-0">About Our</h2>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                  viverra maecenas</p>
                <div class="facts-wrap2 d-inline-flex w-100">
                  <div class="fact-box2">
                    <h6 class="mb-0">Clients</h6>
                    <span class="text-color2 d-block"><span class="counter">140</span><sup>+</sup></span>
                  </div>
                  <div class="fact-box2">
                    <h6 class="mb-0">Projects</h6>
                    <span class="text-color2 d-block"><span class="counter">290</span><sup>+</sup></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- About Wrap 5 -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 py-86 bg-color5 position-relative">
      <div class="bg-waves">
        <div class="wave wave-top-left">
          <img class="layer" src="assets/images/top-left2.png" alt="top-left2">
          <img class="layer" src="assets/images/top-left1.png" alt="top-left1">
        </div>
        <div class="wave wave-bottom-right">
          <img class="layer" src="assets/images/bottom-right2.png" alt="bottom-right2">
          <img class="layer" src="assets/images/bottom-right1.png" alt="bottom-right1">
        </div>
      </div>
      <div class="container">
        <div class="sponsor-wrap w-100 text-center">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-lg-3">
              <div class="sr-box w-100 position-relative overflow-hidden">
                <img class="imp-fluid default-img" src="assets/images/resources/sp-logov1.png" alt="sp-logov1"
                     srcset="assets/images/resources/sp-logov1.png">
                <img class="imp-fluid hover-img" src="assets/images/resources/sp-logov1a.png" alt="sp-logov1a"
                     srcset="assets/images/resources/sp-logov1a.png">
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3">
              <div class="sr-box w-100 position-relative overflow-hidden">
                <img class="imp-fluid default-img" src="assets/images/resources/sp-logov2.png" alt="sp-logov2"
                     srcset="assets/images/resources/sp-logov2.png">
                <img class="imp-fluid hover-img" src="assets/images/resources/sp-logov2a.png" alt="sp-logov2a"
                     srcset="assets/images/resources/sp-logov2a.png">
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3">
              <div class="sr-box w-100 position-relative overflow-hidden">
                <img class="imp-fluid default-img" src="assets/images/resources/sp-logov3.png" alt="sp-logov3"
                     srcset="assets/images/resources/sp-logov3.png">
                <img class="imp-fluid hover-img" src="assets/images/resources/sp-logov3a.png" alt="sp-logov3a"
                     srcset="assets/images/resources/sp-logov3a.png">
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3">
              <div class="sr-box w-100 position-relative overflow-hidden">
                <img class="imp-fluid default-img" src="assets/images/resources/sp-logov4.png" alt="sp-logov4"
                     srcset="assets/images/resources/sp-logov4.png">
                <img class="imp-fluid hover-img" src="assets/images/resources/sp-logov4a.png" alt="sp-logov4a"
                     srcset="assets/images/resources/sp-logov4a.png">
              </div>
            </div>
          </div>
        </div><!-- Sponsor Wrap -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 pt-100 pb-120 position-relative">
      <div id="particles2" class="particles-js top-left" data-color="#ffe27a" data-saturation="300" data-size="40"
           data-count="8" data-speed="2" data-hide="770" data-image="assets"></div>
      <div class="container">
        <div class="sec-title2 mb-90 text-center w-100">
          <div class="d-inline-block">
            <h2 class="mb-0 text-uppercase text-color2 mini-bar"><span>The</span>Story</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor</p>
          </div>
        </div><!-- Section Title Style 2 -->
        <div class="blog-timeline-wrap w-100 position-relative">
          <article class="post-style3 w-100 position-relative">
            <span class="position-absolute">2019</span>
            <div class="post-style3-inner w-100 bg-white d-flex flex-wrap brd-rd10 overflow-hidden">
              <div class="post-img3 w-100">
                <a class="d-block" href="blog-detail-video.html" title=""><img
                    src="assets/images/resources/post-img1-4.jpg" alt="Post Image 1"></a>
              </div>
              <div class="post-info3 w-100">
                <h3 class="mb-0"><a href="blog-detail-video.html" title="">Media Optimization</a></h3>
                <p class="mb-0">From site work to custom brick and stone masonry, Gardeny can ins</p>
                <a class="d-inline-block read-more2" href="blog-detail-video.html" title="">Read More</a>
              </div>
            </div>
          </article>
          <article class="post-style3 rev w-100 position-relative">
            <span class="position-absolute">2019</span>
            <div class="post-style3-inner w-100 bg-white d-flex flex-wrap brd-rd10 overflow-hidden">
              <div class="post-img3 w-100">
                <a class="d-block" href="blog-detail-video.html" title=""><img
                    src="assets/images/resources/post-img1-3.jpg" alt="Post Image 2"></a>
              </div>
              <div class="post-info3 w-100">
                <h3 class="mb-0"><a href="blog-detail-video.html" title="">Easy & Effective</a></h3>
                <p class="mb-0">From site work to custom brick and stone masonry, Gardeny can ins</p>
                <a class="d-inline-block read-more2" href="blog-detail-video.html" title="">Read More</a>
              </div>
            </div>
          </article>
          <article class="post-style3 w-100 position-relative">
            <span class="position-absolute">2019</span>
            <div class="post-style3-inner w-100 bg-white d-flex flex-wrap brd-rd10 overflow-hidden">
              <div class="post-img3 w-100">
                <a class="d-block" href="blog-detail-video.html" title=""><img
                    src="assets/images/resources/post-img1-2.jpg" alt="Post Image 3"></a>
              </div>
              <div class="post-info3 w-100">
                <h3 class="mb-0"><a href="blog-detail-video.html" title="">Engine Submission</a></h3>
                <p class="mb-0">From site work to custom brick and stone masonry, Gardeny can ins</p>
                <a class="d-inline-block read-more2" href="blog-detail-video.html" title="">Read More</a>
              </div>
            </div>
          </article>
          <article class="post-style3 rev w-100 position-relative">
            <span class="position-absolute">2019</span>
            <div class="post-style3-inner w-100 bg-white d-flex flex-wrap brd-rd10 overflow-hidden">
              <div class="post-img3 w-100">
                <a class="d-block" href="blog-detail-video.html" title=""><img
                    src="assets/images/resources/post-img1-7.jpg" alt="Post Image 4"></a>
              </div>
              <div class="post-info3 w-100">
                <h3 class="mb-0"><a href="blog-detail-video.html" title="">Branding and SEO</a></h3>
                <p class="mb-0">From site work to custom brick and stone masonry, Gardeny can ins</p>
                <a class="d-inline-block read-more2" href="blog-detail-video.html" title="">Read More</a>
              </div>
            </div>
          </article>
        </div><!-- Blog Timeline Wrap -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 position-relative">
      <div class="fixed-bg" style="background-image: url(assets/images/bg11.jpg);"></div>
      <div class="service-wrap6 w-100">
        <div class="row mrg">
          <div class="col-md-4 col-sm-6 col-lg-4">
            <div class="service-box6 text-white text-center w-100 position-relative">
              <i class="d-inline-block metaicon-website-1 text-color35"></i>
              <div class="service-info6 w-100">
                <h3 class="mb-0">Consectetur</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliq enim ad minim veniam, quis nostrud exercitation.</p>
                <a class="theme-btn with-icon bordered-btn2" href="javascript:void(0);" title="">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-lg-4">
            <div class="service-box6 text-white text-center w-100 position-relative">
              <i class="d-inline-block metaicon-seo-and-web text-color35"></i>
              <div class="service-info6 w-100">
                <h3 class="mb-0">Submission</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliq enim ad minim veniam, quis nostrud exercitation.</p>
                <a class="theme-btn with-icon bordered-btn2" href="javascript:void(0);" title="">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-lg-4">
            <div class="service-box6 text-white text-center w-100 position-relative">
              <i class="d-inline-block metaicon-idea-2 text-color35"></i>
              <div class="service-info6 w-100">
                <h3 class="mb-0">Strategy</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliq enim ad minim veniam, quis nostrud exercitation.</p>
                <a class="theme-btn with-icon bordered-btn2" href="javascript:void(0);" title="">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- Service Wrap 6 -->
    </div>
  </section>
  <section>
    <div class="w-100 pt-50 pb-130">
      <div class="container">
        <div class="how-we-work-wrap w-100">
          <div class="row align-items-lg-center">
            <div class="col-md-6 col-sm-6 col-lg-7 order-md-1">
              <img class="img-fluid w-100 brd-rd20 mt-50" src="assets/images/resources/how-we-work.png"
                   alt="How We Work Image">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-5">
              <div class="how-we-work-info w-100 mt-50">
                <h2 class="mb-0">How We Work</h2>
                <ul class="how-we-list mb-0 list-unstyled w-100">
                  <li>
                    <div class="how-we-item d-flex flex-wrap w-100">
                      <i class="metaicon-thumb-up text-color2"></i>
                      <div class="how-we-info w-100">
                        <h4 class="mb-0">Organizational Management</h4>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="how-we-item d-flex flex-wrap w-100">
                      <i class="metaicon-clipboard-1 text-color2"></i>
                      <div class="how-we-info w-100">
                        <h4 class="mb-0">Focus Energy and Resources</h4>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="how-we-item d-flex flex-wrap w-100">
                      <i class="metaicon-shield text-color2"></i>
                      <div class="how-we-info w-100">
                        <h4 class="mb-0">Developing Critical Elements</h4>
                        <p class="mb-0">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- How We Work Wrap -->
      </div>
    </div>
  </section>
@endsection
