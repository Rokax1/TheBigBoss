@extends("theme.$theme.layout")
@section('titulo')
    inicio
@endsection

@section('contenido')


<section class="hero-wrap js-fullheight" style="background-image: url(../assets/thebigboss/images/bg-2.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
      <div class="col-lg-12 ftco-animate d-flex align-items-center">
        <div class="text text-center">
          <span class="subheading">bienvenidos</span>
          <h1 class="mb-4">The Big Boss Barber Shop</h1>
          <p><a href="{{route('ReservasCliente')}}" class="btn btn-primary btn-outline-primary px-4 py-2">Reservar ahora</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container-fluid px-0">
    <div class="row no-gutters">
      <div class="col-md text-center d-flex align-items-stretch">
        <div class="services-wrap d-flex align-items-center img" style="background-image: url(../assets/thebigboss/images/formen.jpg);">
          <div class="text">
            <h3>Para Hombres</h3>
            <p><a href="#" class="btn-custom">See pricing <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center d-flex align-items-stretch">
        <div class="text-about py-5 px-4">
          <h1 class="logo">
            <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>The Big Boss</a>
          </h1>
          <h2>
            Bienvenido a nuestro salon</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p class="mt-3"><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
        </div>
      </div>
      <div class="col-md text-center d-flex align-items-stretch">
        <div class="services-wrap d-flex align-items-center img" style="background-image: url(../assets/thebigboss/images/forwomen.jpg);">
          <div class="text">
            <h3>Para Mujeres</h3>
            <p><a href="#" class="btn-custom">See pricing <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="services-section ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
        <span class="subheading">Servicios</span>
        <h2 class="mb-4">
          MENÚ DE SERVICIOS</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
    </div>
    <div class="row no-gutters d-flex">
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="icon"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">
              Corte de pelo &amp; Estilo</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>    
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="icon"><span class="flaticon-beard"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Barba</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="icon"><span class="flaticon-beauty-products"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Maquillaje</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="icon"><span class="flaticon-healthy-lifestyle-logo"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">
              Tratamiento corporal</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-team">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-center pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
        <span class="subheading">Director artistico</span>
        <h2 class="mb-4">
          Maquilladora</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="carousel-team owl-carousel">
          <div class="item">
            <a href="#" class="team text-center">
              <div class="img" style="background-image: url(../assets/thebigboss/images/stylist-1.jpg);"></div>
              <h2>Danica Lewis</h2>
              <span class="position">Estilista</span>
            </a>
          </div>
          <div class="item">
            <a href="#" class="team text-center">
              <div class="img" style="background-image: url(../assets/thebigboss/images/stylist-2.jpg);"></div>
              <h2>Nicole Simon</h2>
              <span class="position">Nail Master</span>
            </a>
          </div>
          <div class="item">
            <a href="#" class="team text-center">
              <div class="img" style="background-image: url(../assets/thebigboss/images/stylist-3.jpg);"></div>
              <h2>Cloe Meyer</h2>
              <span class="position">Director</span>
            </a>
          </div>
          <div class="item">
            <a href="#" class="team text-center">
              <div class="img" style="background-image: url(../assets/thebigboss/images/stylist-4.jpg);"></div>
              <h2>Rachel Clinton</h2>
              <span class="position">
                Estilista</span>
            </a>
          </div>
          <div class="item">
            <a href="#" class="team text-center">
              <div class="img" style="background-image: url(../assets/thebigboss/images/stylist-5.jpg);"></div>
              <h2>Dave Buff</h2>
              <span class="position">Barbero</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters justify-content-center mb-5 pb-2">
      <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Gallery</span>
        <h2 class="mb-4">Our gallery</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-1.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Stylist</span>
            <h3><a href="project.html">Beard</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-1.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-2.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Beauty</span>
            <h3><a href="project.html">Haircut</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-2.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-3.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Beauty</span>
            <h3><a href="project.html">Hairstylist</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-3.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-4.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Beauty</span>
            <h3><a href="project.html">Haircut</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-4.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-5.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Beauty</span>
            <h3><a href="project.html">Makeup</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-5.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-6.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Fashion</span>
            <h3><a href="project.html">Model</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-6.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-7.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Beauty</span>
            <h3><a href="project.html">Makeup</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-7.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{asset("assets/$theme/images/work-8.jpg")}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>Beauty</span>
            <h3><a href="project.html">Makeup</a></h3>
          </div>
          <a href="{{asset("assets/$theme/images/work-8.jpg")}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-team">
    <div class="container-fluid px-md-5">
      <div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <span class="subheading">Conoce nuestros servicios</span>
          <h2 class="mb-4">
            Servicios</h2>
          <p>Conseguiremos Sacar El Mayor Partido a Tu Barba</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="carousel-team owl-carousel">
                @foreach($servicios as $item)
                  <div class="pricing-entry pb-5 text-center">
                    <div>
                      <h3 class="mb-4">{{$item->nombre_servicio}}</h3>
                      <p><span class="price">${{number_format($item->valor_servicio,0,',','.')}}</span> <span class="per">/ session</span></p>
                    </div>
                    <ul>
                      <li>{{$item->descripcion_servicio}}</li>
                    </ul>
                    <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Reservar</a></p>
                  </div>
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="testimony-section bg-light">
  <div class="container">
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-6 col-lg-5 d-flex">
        <div class="testimony-img" style="background-image: url(../assets/thebigboss/images/testimony-img.jpg);"></div>
      </div>
      <div class="col-md-6 col-lg-7 py-5 pl-md-5">
        <div class="py-md-5">
          <div class="heading-section ftco-animate">
            <span class="subheading">Testimony</span>
            <h2 class="mb-0">Happy Customer</h2>
          </div>
          <div class="carousel-testimony owl-carousel ftco-animate">
            <div class="item">
              <div class="testimony-wrap pb-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex">
                  <div class="user-img" style="background-image: url(../assets/thebigboss/images/stylist-1.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeff Nucci</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap pb-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex">
                  <div class="user-img" style="background-image: url(../assets/thebigboss/images/stylist-2.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeff Nucci</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap pb-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex">
                  <div class="user-img" style="background-image: url(../assets/thebigboss/images/stylist-3.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeff Nucci</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap pb-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex">
                  <div class="user-img" style="background-image: url(../assets/thebigboss/images/stylist-4.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeff Nucci</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap pb-4">
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex">
                  <div class="user-img" style="background-image: url(../assets/thebigboss/images/stylist-5.jpg)">
                  </div>
                  <div class="pos ml-3">
                    <p class="name">Jeff Nucci</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
