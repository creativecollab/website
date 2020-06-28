@extends('web.layout.app')
@section('content')
  <section>
    <div class="w-100 pt-60 position-relative bg-creative-color1">
{{--      <div class="fixed-bg" style="background-image: url(assets/images/bg10.jpg);"></div>--}}
      <div class="container">
        <div class="page-title-wrap text-center w-100 d-inline-block">
          <div class="page-title-inner d-inline-block">
            <h2 class="mb-0 text-color7">Contato</h2>
            <p class="mb-0 text-white">
              A Creative Collab
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod
              tempor incididunt ut labore et dolore</p>
          </div>
          <div class="breadcrumbs-wrap w-100">
            <ul class="breadcrumbs mb-0 list-unstyled d-inline-flex">
              <li><a href="{{ route('web.home') }}" title="Home">Home</a></li>
              <li class="active">Contato</li>
            </ul><!-- Breadcrumbs -->
          </div>
        </div><!-- Page Title Wrap -->
      </div>
    </div>
  </section>
  <section>
    <div class="w-100 pt-50 pb-86">
      <div class="container">
        <div class="contact-wrap w-100">
          <div class="row align-items-center">
            <div class="col-md-5 col-sm-12 col-lg-4">
              <div class="get-in-touch-wrap mt-40 text-white w-100 overflow-hidden brd-rd20 bg-creative-color1"
                   style="background-image: url(assets/images/bg12.png);">
                <h2 class="mb-0">Entre em Contato</h2>
                <p class="mb-0">Metamax is a USA search engine marketing agency, that deliver digital</p>
                <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                  <i class="fas fa-envelope"></i>
                  <div class="contact-info-inner">
                    <h4 class="mb-0">Email:</h4>
                    <a href="mailto:" class="mb-0">contato@creativecollab.com.br</a>
                  </div>
                </div>
                <div class="contact-info-box mt-20 d-flex flex-wrap w-100">
                  <i class="fas fa-mobile-alt"></i>
                  <div class="contact-info-inner">
                    <h4 class="mb-0">Telefone:</h4>
                    <p class="mb-0">+55 (61) 99605 3962</p>
                  </div>
                </div>
                <div class="scl-links2 mt-40 w-100">
                  <a href="javascript:void(0);" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                  <a href="javascript:void(0);" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="javascript:void(0);" title="Youtube" target="_blank"><i class="fab fa-weixin"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-sm-12 col-lg-8">
              <div class="contact-form-wrap contact-form mt-40 w-100">
                <h2 class="mb-0">Mensagem</h2>
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
                      <input class="w-100 mt-20 phone" type="text" name="phone" value="" placeholder="Seu Telefone *" required>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6">
                      <input class="w-100 mt-20 follow_us"
                             type="text" name="follow_us"
                             value="" placeholder="Com nos Conheceu ?" />
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
                      <button class="creative-btn-thene creative-btn-fill mt-20" id="submit" type="button">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- Contact Wrap -->

      </div>
    </div>
  </section>
@endsection
