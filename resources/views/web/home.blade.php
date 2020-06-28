@extends('web.layout.app')

@section('content')
  @include('web.components.slider')
  <section>
    <div class="w-100 pt-120 pb-120 position-relative mt-30">
      <div id="particles1" class="particles-js top-left" data-color="#ffe27a" data-saturation="300" data-size="40"
           data-count="8" data-speed="2" data-hide="770" data-image="{{ url(asset('web/assets')) }}"></div>
      <div class="container">
        <div class="sec-title2 mb-70 text-center w-100">
          <div class="d-inline-block">
            <h2 class="mb-0  text-color2">
              <span>Sobre</span>A Creative Collab</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod
              tempor</p>
          </div>
        </div><!-- Section Title Style 2 -->
        <div class="about-wrap w-100">
          <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 col-lg-6">
              <img class="img-fluid" src="{{ url(asset('web/assets/images/resources/about-mckp1.png')) }}" alt="About Mockup">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
              <div class="about-desc w-100">
                <h2 class="mb-0">What we do?</h2>
                <p class="mb-0">Praesent fermentum elit sed libero egestas ullamcorper. Mauris pharetra
                  nulla id augue auctor placerat. Proin tortor leo, convallis a mi a, feugiat aliquam
                  dui. Vestibulum cursus auctor nisl non vulputate.</p>
                <div class="btns ">
                  <a class=" icon-btn theme-btn icon-right fill-btn"
                     href="{{ route('web.about') }}"
                     title="Read More">
                    <i class="metaicon-028-arrow-metamax"></i>Saiba +<i class="metaicon-028-arrow-metamax"></i></a>
                  <a class=" simple-btn theme-btn bordered-btn"
                     href="{{ route('web.contact') }}"
                     title="Fale Conosco">Fale Conosco
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- About Style 1 -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100  position-relative service-wrap pt-30">

      <div class="container">
        <div class="sec-title2 mb-70 text-center w-100">
          <div class="d-inline-block">
            <h2 class="mb-0 text-uppercase text-color2">
              <span>Nossos</span>Serviços</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod
              tempor</p>
          </div>
        </div><!-- Section Title Style 2 -->
        <div class="service-caro">
          <div class="service-box-wrap">
            <div class="service-box">
              <span class="icon">
                  <i class="svg">
                    <img src="{{ url(asset('web/assets/images/creative-icons/otimizacao.svg')) }}" alt="">
                  </i>
              </span>
              <div class="service-info">
                <i class="font-style-normal">01</i>
                <h3 class="mb-0">Desenvolvimento Web</h3>
                <p class="mb-0">Start working with an company that provide everything you need to any
                  create awareness drive</p>
                <a class="service-btn"
                   href="javascript:void(0);"
                   title="">
                  SAIBA +
                </a>
              </div>
            </div>
          </div>
          <div class="service-box-wrap">
            <div class="service-box">
                <span class="icon">
                    <i class="svg">
                    </i>
                </span>
              <div class="service-info">
                <i class="font-style-normal">02</i>
                <h3 class="mb-0">Redes Sociais</h3>
                <p class="mb-0">Start working with an company that provide everything you need to any
                  create awareness drive</p>
                <a class="service-btn" href="javascript:void(0);" title="">Saiba +</a>
              </div>
            </div>
          </div>
          <div class="service-box-wrap">
            <div class="service-box">
                  <span class="icon">
                    <i class="svg">
                    <img src="{{ url(asset('web/assets/images/creative-icons/otimizacao.svg')) }}" alt="">
                  </i>
                </span>

              <div class="service-info">
                <i class="font-style-normal">03</i>
                <h3 class="mb-0">Seo</h3>
                <p class="mb-0">Start working with an company that provide everything you need to any
                  create awareness drive</p>
                <a class="service-btn"
                   href="{{ route('web.services.seo')}}"
                   title="">SAIBA +</a>
              </div>
            </div>
          </div>
          <div class="service-box-wrap">
            <div class="service-box">
                  <span class="icon">
                    <i class="svg">
                    </i>
                </span>

              <div class="service-info">
                <i class="font-style-normal">04</i>
                <h3 class="mb-0">Midias Online</h3>
                <p class="mb-0">Start working with an company that provide everything you need to any
                  create awareness drive</p>
                <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
              </div>
            </div>
          </div>

          <div class="service-box-wrap">
            <div class="service-box">
                  <span class="icon">
                    <i class="svg">
                    </i>
                </span>

              <div class="service-info">
                <i class="font-style-normal">05</i>
                <h3 class="mb-0">Design Gráfico</h3>
                <p class="mb-0">Start working with an company that provide everything you need to any
                  create awareness drive</p>
                <a class="service-btn" href="javascript:void(0);" title="">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Service Wrap -->
  </section>



  <div class="w-100 bg-color5 position-relative pt-100 pb-200">
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

      <div class="about-wrap2 position-relative w-100">

        <div class="sec-title2 mb-70 text-center w-100">
          <div class="d-inline-block">
            <h2 class="mb-0 text-uppercase text-color2"><span>Fale</span>Conosco</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod
              tempor</p>
          </div>
        </div><!-- Section Title Style 2 -->

        <div class="row align-items-center">
          <div class="col-md-6 col-sm-12 col-lg-6">

            <img class="img-fluid" src="{{ url(asset('web/assets/images/contact_us.png')) }}" alt="About Mockup">
          </div>
          <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="contact-form-wrap contact-form mt-40 w-100">

              <form class="w-100" action="#" method="post" id="email-form">
                <div class="form-group">
                  <div class="response"></div>
                </div>

                <div class="row mrg20">
                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <input class="w-100 mt-20 fullname"
                           type="text"
                           name="fullname"
                           value="" placeholder="Seu nome completo *"
                           required
                    />
                  </div>

                  <div class="col-md-12 col-sm-12 col-lg-12">
                    <input class="w-100 mt-20 email"
                           type="email"
                           name="email" value="" placeholder="seu@email.com *"
                           required>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <input class="w-100 mt-20 phone" type="text" name="phone" value="" placeholder="Seu Telefone *"
                           required>
                  </div>

                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <input class="w-100 mt-20 follow_us"
                           type="text" name="follow_us"
                           value="" placeholder="Com nos Conheceu ?"/>
                  </div>

                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <input class="w-100 mt-20 phone"
                           type="text"
                           name=""
                           value=""
                           placeholder="Cargo (Opcional)"
                    />
                  </div>

                  <div class="col-md-6 col-sm-6 col-lg-6">
                    <input class="w-100 mt-20 company" type="text" name="company"
                           value="" placeholder="Empresa  (Opcional)"
                    />
                  </div>

                  <div class="col-md-12 col-sm-12 col-lg-12">
                      <textarea class="w-100 mt-20 contact_message" value="" name="contact_message"
                                placeholder="Nos conte sobre seu Projeto, Referências, Concorrentes,
                                Público Alvo e Qualquer informações importantes... *"
                                required>

                      </textarea>
                    <button class="creative-btn-thene creative-btn-fill mt-20" id="submit" type="button">Enviar
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- About Style 2 -->
    </div>
  </div>
  </section>


  <section>
    <div class="w-100 pt-100 pb-60 bg-color10">
      <div class="container">
        <div class="sec-title2 mb-70 text-center w-100">
          <div class="d-inline-block">
            <h2 class="mb-0 text-uppercase text-color"><span>A</span>Equipe</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod
              tempor</p>
          </div>
        </div><!-- Section Title Style 2 -->
        <div class="team-wrap text-center w-100">
          <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-lg-3">
              <article class="team-box w-100 mr-auto ml-auto">
                <div class="team-img rounded-circle overflow-hidden">
                  <a href="javascript:void(0);" title=""><img
                      src="assets/images/resources/team-img1-1.png" alt="Team Image 1"></a>
                </div>
                <div class="team-info w-100 text-color12">
                  <h3 class="mb-0">
                    <a href="javascript:void(0);"
                       title="">Marcos De Souza</a>
                  </h3>
                  <span class="d-block">
                                      <a href="javascript:void(0);"
                                         title="">CTO</a></span>
                  <div class="scl-lnks">
                    <a href=""></a>
                    <a href="javascript:void(0);" title="Github"
                       target="_blank">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="javascript:void(0);"
                       title="Instagram"
                       target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="javascript:void(0);" title="Twitter" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3">
              <article class="team-box w-100 mr-auto ml-auto">
                <div class="team-img rounded-circle overflow-hidden">
                  <a href="javascript:void(0);" title=""><img
                      src="assets/images/resources/team-img1-2.png" alt="Team Image 2"></a>
                </div>
                <div class="team-info w-100 text-color12">
                  <h3 class="mb-0">
                    <a href="javascript:void(0);"
                       title="">Israel Martins</a></h3>
                  <span class="d-block">
                                      <a href="javascript:void(0);" title="">Markenting Digital</a></span>
                  <div class="scl-lnks">
                    <a href="javascript:void(0);" title="YouTube" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                    <a href="javascript:void(0);" title="Instagram" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0);" title="Twitter" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3">
              <article class="team-box w-100 mr-auto ml-auto">
                <div class="team-img rounded-circle overflow-hidden">
                  <a href="javascript:void(0);" title=""><img
                      src="assets/images/resources/team-img1-3.png" alt="Team Image 3"></a>
                </div>
                <div class="team-info w-100 text-color12">
                  <h3 class="mb-0"><a href="javascript:void(0);" title="">
                      Luis Felipe</a></h3>
                  <span class="d-block"><a href="javascript:void(0);"
                                           title="">Design Gráfico</a></span>
                  <div class="scl-lnks">
                    <a href="javascript:void(0);" title="YouTube" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                    <a href="javascript:void(0);" title="Instagram" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0);" title="Twitter" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3">
              <article class="team-box w-100 mr-auto ml-auto">
                <div class="team-img rounded-circle overflow-hidden">
                  <a href="javascript:void(0);" title=""><img
                      src="assets/images/resources/team-img1-4.png" alt="Team Image 4"></a>
                </div>
                <div class="team-info w-100 text-color12">
                  <h3 class="mb-0"><a href="javascript:void(0);" title="">Vinicius Souza</a></h3>
                  <span class="d-block"><a href="javascript:void(0);"
                                           title="">Desenvolvedor</a></span>
                  <div class="scl-lnks">
                    <a href="javascript:void(0);"
                       title="YouTube"
                       target="_blank">
                      <i class="fab fa-youtube"></i></a>
                    <a href="javascript:void(0);" title="Instagram" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0);" title="Twitter" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div><!-- Team Wrap -->
      </div>
    </div>
  </section>


@endsection
