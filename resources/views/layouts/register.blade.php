<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet"href="{{asset("css/bootstrap.min.css")}}">
        <link rel="stylesheet"href="{{asset("css/style.css")}}">
        <script type="text/text/javascript"src="{{asset("js/bootstrap.min.js")}}"></script>

    </head>
    <body style="background-color:#64748c;">
        <main class="container">
            <div class="row my-lg-2">
                <div class="col"></div>
                <div class="col-6">
                    <div class="card d-flex justify-content-center bg-white m-5 text-center">
                        <div class="row my-2">
                            <div class="col">
                                <h1 >Register</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>Create an account. It is free and only takes a minute</h5>
                            </div>
                        </div>
                        <form action="">
                            <div class="row justify-content-center">
                                <div class="col-5">
                                    <label for="nombre" class="form-label"></label>
                                    <input type="text" class="form-control" id="nombre" placeholder="First name" value="" required>

                                </div>
                                <div class="col-5">
                                    <label for="apellido" class="form-label"></label>
                                    <input type="text" id="apellido" class="form-control" placeholder="Last name" value="" required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <label for="email" class="form-label"></label>
                                    <input type="email" id="email" class="form-control"placeholder="Email" value="" required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <label for="password" class="form-label"></label>
                                    <input type="password" id="password" class="form-control"placeholder="Password" value="" required>
                                </div>
                            </div>
                            <div class="row justify-content-evenly">
                                <div class="col-10">
                                    <label for="password_confirm" class="form-label"></label>
                                    <input type="password" id="password_confirm" class="form-control" placeholder="Confirm Password" value="" require>
                                </div>
                            </div>
                            <div class="row justify-content-evenly">
                                <div class="col-10 ">
                                    <div class="form-check">
                                        <br>
                                        <input class="form-check-input" type="checkbox" value="" id="check_aceptar">
                                        <label class="form-check-label" for="check_aceptar">I accept the terms of use & privacy policy</label>
                                        <br>
                                        </input>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-10">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" type="submit"><span class="icon-thumbs-up text-light">Register now</span></button>
                                        <br>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                        </form>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <label for="nombre" class="form-label text-white">¿Already an account? <a class="content-center underline text-white dark:text-whitr">Register</a></label>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </main>
    </body>
</html>

