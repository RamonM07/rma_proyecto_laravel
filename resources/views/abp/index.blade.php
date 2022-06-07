<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
        <title>Devoluciones</title>
        <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <link rel="stylesheet" href="{{asset("fonts/style.css")}}">
        <link rel="stylesheet" href="{{asset("abp/estilos.css")}}">
    </head>
        
    <body style="background-color:#d8f8e1;">

    <div class="container">
        <h1 class="h1 alert alert-primary text-center">Devoluciones</h1>
        <div class="row">
            <div class="col -6">
                <figure class="figure">
                    <img src="{{asset('images/back.svg')}}" alt="ethe" class="figure-img img-fluid" style="width:200%">
                </figure>
            </div>

            <div class="col-2"></div>

            <div class="col-3">
                <ul class="nav nav-pills flex-column mb-auto active">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link active" aria-current="page">
                        <i class = "icon-home"></i>  Inicio</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{url('tipos_reacciones/create')}}" class="nav-link active link-dark"><i class ="icon-plus2"></i>  Registrar</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{url('tipos_reacciones/update')}}" class="nav-link active link-dark"><i class ="icon-mode_edit"></i>  Editar registro</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{url('tipos_reacciones/destroy')}}" class="nav-link  active link-dark"><i class ="icon-trashcan"></i>  Eliminar registro</a>
                    </li>
                </ul>
            </div>

            <div class="col-1"></div>

        </div>
        <div class="col-12">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{asset("/images/marvel.gif")}}" class="center-block w-30" alt="..."style= "width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Las nuevas y mejores peliculas</h5>
                            <p>Encuentra la pelicula que estas buscando</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset("/images/disney.gif")}}" class="d-block w-30" alt="..."style= "width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Las nuevas y mejores peliculas</h5>
                            <p>Encuentra la pelicula que estas buscando</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("/images/dream.gif")}}" class="d-block w-30" alt="..."style= "width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 text-white>Las nuevas y mejores peliculas</h5>
                            <p text-white>Encuentra la pelicula que estas buscando</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
            
            <div class="col-12"></div>

                <script type="text/text/javascript"src="{{asset('js/bootstrap.bundle.js')}}"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
    
    </body>
</html>
