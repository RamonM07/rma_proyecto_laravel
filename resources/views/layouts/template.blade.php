<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Template</title>
        <link rel="stylesheet"href="{{asset("css/bootstrap.min.css")}}">
        <link rel="stylesheet"href="{{asset("css/style.css")}}">
        <link rel="stylesheet"href="{{asset("fonts/style.css")}}">
        <script type="text/text/javascript"src="{{asset("js/bootstrap.min.js")}}"></script>
    </head>
    <body class="bg-danger">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="padding-left: 2em">
                    <h1 class="text-white ml-2"><span class=" icon-fire"></span> </h1>
                </a>
                <button class="navbar-toggler"type="button"data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center"id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item border-bottom border-white  m-2 p-1">
                            <a class="nav-link active text-white" aria-current="page" href="#"><span class="icon-home2">  Inicio</span></a>
                        </li>
                        <li class="nav-item border-bottom border-white m-2 p-1">
                            <a class="nav-link text-white" href="#"><span class=" icon-phone-hang-up">  Contacto</span></a>
                        </li>
                        <li class="nav-item border-bottom border-white m-2 p-1">
                            <a class="nav-link text-white" aria-current="page" href="#"><span class="icon-file-pdf">  Acerca de</span></a>
                        </li>
                        <li class="nav-item border-bottom border-white m-2 p-1">
                            <a class="nav-link text-white" aria-current="page" href="#"><span class=" icon-cloud-check">  Registro</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container">
            <div class="row">
                <div class="col-7 mt-2">
                    <figure class="figure">
                        <img src="{{asset("/images/login.svg")}}" alt="login" class="figure-img img-fluid" style= "padding: 3em;width:100%">
                    </figure>
                </div>

                <div class="col-5" style="padding-left: 3em">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h3 class="text-white ">Formulario</h3>
                        </div>
                        <div class="row bg-white">
                            <div class="col mb-5 text-black mt-5">
                                <h5 class="text-center">Registro</h5>
                                <form action="">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" id="email" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="user" class="form-label">Nombre de Usuario</label>
                                        <input type="text" id="user" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                        <button type="submit" class="btn btn-danger"><span class=" icon-upload2"> Guardar</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
