<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
        <title>Papeleria Mary</title>
        <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <link rel="stylesheet" href="{{asset("fonts/style.css")}}">
        <link rel="stylesheet" href="{{asset("abp/estilos.css")}}">
    </head>

    <body style="background-color:#d8f8e1;">
        <div class="container ">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="text-gray-300 justify-content-lg-start">
                    <form class="col-0 col-lg mb-0 mb-lg-0 ">
                    <input type="search" class="form-control border-danger" placeholder="Producto, título, autor, etc." aria-label="Search">
                    </form>
                </p>
                <u1 class="nav col-md-4 justify-content-center">
                    <img src="{{asset("/images/icono.png")}}" alt="icono" class="figure-img img-fluid" style= "width:20%">
                </u1>
                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-black"><span class="icon-favorite text-black"> </span>Favoritos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-black"><span class="icon-profile-male text-black"> </span>Mi cuenta</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-black"><span class="icon-cart1 text-black"> </span>Mi compra</a></li>

                </ul>
            </footer>
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger" aria-label="navbar">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Papeleria</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Consumibles</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#">4</a></li>
                                    <li><a class="dropdown-item" href="#">5</a></li>
                                    <li><a class="dropdown-item" href="#">6</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Juguetes</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#">7</a></li>
                                    <li><a class="dropdown-item" href="#">8</a></li>
                                    <li><a class="dropdown-item" href="#">9</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Manualidades</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#">10</a></li>
                                    <li><a class="dropdown-item" href="#">11</a></li>
                                    <li><a class="dropdown-item" href="#">12</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Mobiliario</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#">13</a></li>
                                    <li><a class="dropdown-item" href="#">14</a></li>
                                    <li><a class="dropdown-item" href="#">15</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Libros</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#">16</a></li>
                                    <li><a class="dropdown-item" href="#">16</a></li>
                                    <li><a class="dropdown-item" href="#">17</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{asset("/images/icono.png")}}" class="center-block w-30" alt="..."style= "width:20%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset("/images/icono.png")}}" class="d-block w-30" alt="..."style= "width:20%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("/images/icono.png")}}" class="d-block w-30" alt="..."style= "width:20%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
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

                <script type="text/text/javascript"src="{{asset('js/bootstrap.bundle.js')}}"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
