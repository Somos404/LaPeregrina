@extends('layouts.app')

@section('content')
    <!-- End: Fixed navbar starting with transparency --><header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('/assets/img/Slide1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <p class="lead">más de 30 años de experiencia</p>
          <h2 class="display-4">EN EL MERCADO AZUCARERO</h2>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/assets/img/Slide2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <p class="lead">abastecemos</p>
          <h2 class="display-4">PEQUEÑOS Y GRANDES
DISTRIBUIDORES</h2>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/assets/img/Slide3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <p class="lead-0">comercializamos</p>
          <h2 class="display-0">AZÚCAR A TODO EL PAÍS</h2>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         </a>
  </div>
</header>
    <!-- Start: 1 Row 1 Column -->
    <div style="background: url('/assets/img/Faja-1.png') center / cover no-repeat;padding-top: 100px;padding-bottom: 150px;">
        <div class="container" style="background: url('/assets/img/Faja 1.png');">
            <div class="row" style="background-color: rgba(255,255,255,0);"><div class="col-md-12">
    
<h2 class="Titulo2">AZÚCAR LA PEREGRINA</h2>
<p class="Encabezado1">de mesa en mesa endulzando momento</p>
</div>
</div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
    <!-- Start: 1 Row 1 Column -->
    <div>
        <div class="container">
            <div class="row"><div class="col-md-12">
<h2 class="Titulo3">NOSOTROS</h2>
<p class="Subtitulo1">Somos una empresa familiar que nació en el 2003,<br>
queremos acompañarlos endulzando sus momentos.</p>
</div></div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
    <!-- Start: 1 Row 3 Columns -->
    <div style="margin-top: 30px;">
        <div class="container" style="padding-bottom: 60px;padding-top: 60px;">
            <div class="row">
                <div class="col-md-4"><div class="item-nosotros">
    <img src="{{ url('/assets/img/Iconos-01.png') }}" style="width: 90px;" />
<h2 class="item-nosotros-titulo">NOSOTROS</h2>
<p class="item-nosotros-texto">Más de 30 años de experiencia en el <br>
mercado azucarero realizando un producto<br>
de gran calidad</p>
</div></div>
                <div class="col-md-4"><div class="item-nosotros">
    <img src="/assets/img/Iconos-02.png" style="width: 90px;" />
<h2 class="item-nosotros-titulo">VARIEDAD</h2>
<p class="item-nosotros-texto">Comercializamos palets de azúcar<br>
común tipo “A” a todo el país <br>en fardos de 10 unidades por 1 kg.</p>
</div></div>
                <div class="col-md-4"><div class="item-nosotros">
    <img src="/assets/img/Iconos-03.png?h=bc6ec229754576811c12b6d28bbfff58" style="width: 90px;" />
<h2 class="item-nosotros-titulo">VARIEDAD</h2>
<p class="item-nosotros-texto">Comercializamos palets de azúcar<br>
común tipo “A” a todo el país <br>en fardos de 10 unidades por 1 kg.</p>
</div></div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 3 Columns -->
    <!-- Start: Bootstrap 4 - Full Video Background v2 --><div class="video-background-holder">
  <div class="video-background-overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="/assets/img/Faja_blog.mp4" type="video/mp4">
    </video>
  <div class="video-background-content container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        </div>
    </div>
  </div>
</div>
    <!-- End: Bootstrap 4 - Full Video Background v2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=22fc2aed152297522259c2eaabe4b4df"></script>
    </div>
    <!-- End: Bootstrap 4 - Full Video Background v2 -->
    <!-- Start: 1 Row 1 Column -->
    <div data-aos="fade-up" style="margin-top: 150px;margin-bottom: 30px;">
        <div class="container">
            <div class="row"><div class="col-md-12">
<h2 class="Titulo3">NUESTRO PRODUCTO</h2>
<p class="Subtitulo1">Se recomienda nuestra azúcar común tipo "A", de cristales finos y corredizos<br>provenientes de ingenios tucumanos, para la fabricación de dulces<br>y mermeladas, panificación y repostería, caramelos, gaseosas, etc</p>
</div></div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
    <!-- Start: 1 Row 3 Columns -->
    <div data-aos="fade-up" style="padding: 70px;padding-top: 30px;padding-left: 0px;padding-right: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding-top: 15px;padding-bottom: 15px;"><img src="/assets/img/01.jpg" style="width: 320px;height: 320px;border-style: none;"></div>
                <div class="col-md-4" style="padding-top: 15px;padding-bottom: 15px;"><img src="/assets/img/02.jpg" style="width: 320px;height: 320px;border-style: none;"></div>
                <div class="col-md-4" style="padding-top: 15px;padding-bottom: 15px;"><img src="/assets/img/03.jpg" style="width: 320px;height: 320px;border-style: none;"></div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 3 Columns -->
    <!-- Start: 1 Row 1 Column -->
    <div style="padding: 70px;padding-left: 0px;padding-right: 0px;padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img data-aos="fade-left" src="/assets/img/Ilusinfo.png" style="width: 1090px;padding-left: 0px;"></div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
    <!-- Start: 1 Row 1 Column -->
    <div data-aos="fade-up" style="margin-top: 0px;margin-bottom: 30px;">
        <div class="container">
            <div class="row"><div class="col-md-12">
<h2 class="Titulo3">BENEFICIOS</h2>
<p class="Subtitulo1">de la azúcar de caña</p>
</div></div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
    <!-- Start: 1 Row 1 Column -->
    <div data-aos="zoom-in" style="padding: 70px;padding-left: 0px;padding-right: 0px;padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img data-aos="zoom-in" src="/assets/img/Bowlazucar2.jpg" style="width: 1090px;padding-left: 0px;"></div>
            </div>
        </div>
    <!-- Start: Lighbox Gallery -->
    <div class="container" style="padding-right: 0px;padding-left: 0px;">
        <div class="row photos" style="margin-left: 0px;margin-right: 0px;width: 1210px;">
        <div class="col-sm-6 col-md-4 col-lg-3 offset-xl-1 item"><a data-lightbox="photos" href="/assets/img/01.jpg"><img class="img-fluid" src="/assets/img/01.jpg" /></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="/assets/img/01.jpg"><img class="img-fluid" src="/assets/img/01.jpg" /></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="/assets/img/01.jpg"><img class="img-fluid" src="/assets/img/01.jpg" /></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 offset-xl-1 item"><a data-lightbox="photos" href="/assets/img/01.jpg"><img class="img-fluid" src="/assets/img/01.jpg" /></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="/assets/img/01.jpg"><img class="img-fluid" src="/assets/img/01.jpg" /></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="/assets/img/01.jpg"><img class="img-fluid" src="/assets/img/01.jpg" /></a></div>
     </div>
          <!-- End: Lighbox Gallery -->
<!-- Start: 1 Row 1 Column -->
<div data-aos="fade-up" style="margin-top: 0px;margin-bottom: 30px;">
        <div class="container">
            <div class="row"><div class="col-md-12">
<h2 class="Titulo3">BLOG</h2>
<p class="Subtitulo1">Compartimos nuestro toque de dulzura a cada momento</p>
</div></div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
    



</div>
    </div>
<<<<<<< HEAD
    
=======
    <button type="button" class="btn btn-primary btn-lg">VER MÁS</button>

>>>>>>> 1645dd4a8ce026a947c6cfbcbd220d9e305e94f7
 @endsection