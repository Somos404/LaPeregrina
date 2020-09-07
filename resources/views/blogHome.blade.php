@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>La Peregrina | Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/assets/css/clean-blog.min.css" rel="stylesheet">

</head>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('/assets/img/Faja_blog.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>BLOG</h1>
           
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

       

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="/assets/img/01.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">LEER MÁS &rarr;</a>
          </div>
        
        </div>

        <!-- SLIDER NOTICIAS -->

        <div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

       

        <!-- Categories Widget -->
        <div class="card my-4">
            <div class="container-card-header"><h6 class="card-header">ÚLTIMAS NOVEDADES</h6></div>
          
          <div class="card-body">
            <div class="row">
              <div class="col">
                <ul class="list-unstyled mb-0">
                <ul class="list-unstyled">
                    <li class="media">
                        <img src="/assets/img/01.jpg" class="mr-3" alt="...">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">NOVEDAD 1</h5>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img src="/assets/img/02.jpg" class="mr-3" alt="...">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">NOVEDAD 1</h5>
                        </div>
                    </li>
                    <li class="media">
                        <img src="/assets/img/03.jpg" class="mr-3" alt="...">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">NOVEDAD 1</h5>
                        </div>
                    </li>
                </ul>
                </ul>
                </div>
            </div>
          </div>
        </div>         

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">CONTACTATE CON NOSOTROS!</h5>
          <div class="card-body">

          <div class="row">
              <div class="col">
                <ul class="list-unstyled mb-0">
                <ul class="list-unstyled">
                    <li class="media">
                        <img src="/assets/img/Iconos-07.png" class="mr-3" alt="...">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">@azucarlaperegrina</h5>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img src="/assets/img/Iconos-08.png" class="mr-3" alt="...">
                        <div class="media-body">
                        <h5 class="mt-0 mb-1">azucarlaperegrina</h5>
                        </div>
                    </li>
                </ul>
                </ul>
                </div>
            </div>
            
            </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  @endsection