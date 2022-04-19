<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-wigth, user-scalable=no, initial-scale=1,0 minimum-scalet=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treva</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
</head>
<body style="background-color: #6a38fa">
<nav class="bg-primary navbar-expand-lg navbar-light" >
    <div class="row" style="background-color: #6a38fa">
        <h1 class="p-lg-3 text-white text-center">TREVA</h1>
        <h1 class="p-lg-3 text-white text-center">Form Wizard Components</h1>
    </div>
</nav>
<main class="container">
    <div class="row" >
        <div class="col-12" >
            <div class="row text-dark" >
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse justify-content-end text-white" id="navbarSupportedContent" style="background-color: #6a38fa">
                            <ul class="navbar-nav" style="background-color: #6a38fa">
                                <li class="nav-item m-1 p-1">
                                    <a class="navbar-brand text-white" href="#">
                                        <h5 class="p-lg-1"><span class="icon-search"></span></h5>
                                    </a>
                                </li>
                                <li class="m-2 p-1">
                                    <a class="text-white" href="#">Búsqueda</a>
                                </li>
                                <li class="m-2 p-1">
                                    <a class="text-white" href="#">Dashboard</a>
                                </li>
                                <li class="m-2 p-1">
                                    <a class="text-white" href="#">Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-5 mt-6 pb-1 card">
            <h6 class="card-title mb-1 mt-2"><b>Basic Wizard</b></h6>
            <form class="p-1 pt-1">
                <div class="mb-1 btn-group" style="width: 100%;">
                    <button type="submit" class="btn btn-primary"><b>PROFILE</b></button>
                    <button type="submit" class="btn btn-light text-primary"><b>ADDRESS</b></button>
                    <button type="submit" class="btn btn-light text-primary"><b>FINAL</b></button>
                </div>
                <div class="mb-1">
                    <label for="username" class="form-label" style="font-size: small"><b style="opacity: 50%;">Name</b></label>
                    <input type="password" id="username" class="form-control" placeholder="Password">
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label" style="font-size: small"><b style="opacity: 50%;">Email</b></label>
                    <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label"><b style="opacity: 50%;">Password</b></label>
                    <input type="password" id="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Previous</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
        <div class="square col-2 bg-light"></div>
        <div class="col-5 mt-6 pb-1 card">
            <h6 class="card-title mb-1 mt-2"><b>Wizard with Button</b></h6>
            <form class="p-1 pt-1">
                <div class="mb-1 btn-group" style="width: 100%;">
                    <button type="submit" class="btn btn-light text-primary"><b>PROFILE</b></button>
                    <button type="submit" class="btn btn-primary"><b>ADDRESS</b></button>
                    <button type="submit" class="btn btn-light text-primary"><b>FINAL</b></button>
                </div>
                <div class="mb-1">
                    <label for="state" class="form-label"><b style="opacity: 50%;">State</b></label>
                    <input type="text" id="state" class="form-control" placeholder="Select State">
                </div>
                <div class="mb-1">
                    <label for="address" class="form-label"><b style="opacity: 50%;">Address</b></label>
                    <br>
                    <textarea id="address" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">First</button>
                <button type="submit" class="btn btn-primary">Previous</button>
                <button type="submit" class="btn btn-primary">Last</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
        <div class="col-sm-6 d-flex" style="background-color: #f5f7fb">
            <button type="submit" class="btn text-white" style="background-color: #748994" ><span class="icon-floppy-disk">Collapse</span></button>
            <button type="submit" class="btn text-white"  style="background-color: #0966fd"><span class="icon-floppy-disk">Copy</span></button>
        </div>
        <div class=" col-sm-6 d-flex  justify-content-end" style="background-color: #f5f7fb" >
            <button type="submit" class="btn text-white justify-content-start" style="background-color: #748994" ><span class="icon-floppy-disk">Collapse</span></button>
            <button type="submit" class="btn text-white"  style="background-color: #0966fd"><span class="icon-floppy-disk">Copy</span></button>
        </div>
        <div class="col-5 mt-6 pb-1 card">
            <h6 class="card-title mb-1 mt-2"><b>Wizard with Progress</b></h6>
            <form class="p-1 pt-1">
                <div class="mb-1 btn-group" style="width: 100%;">
                    <button type="submit" class="btn btn-light text-primary"><b>PROFILE</b></button>
                    <button type="submit" class="btn btn-light text-primary"><b>ADDRESS</b></button>
                    <button type="submit" class="btn btn-primary"><b>FINAL</b></button>
                </div>
                <div class="mb-1">
                    <hr style="height: 4px; color: yellowgreen">
                </div>
                <div class="p-1 pt-1 text-center">
                    <label class=" text-success">
                        <h1 class="pl-5"><span class="icon-checkmark"></span></h1>
                    </label>
                </div>
                <div class="p-1 pt-1 text-center">
                    <label><b>Registration Done!...</b></label>
                </div>
                <div class="p-1 pt-1 text-center">
                    <h6 style="opacity: 50%;">Lorem Ipsum is Simply dummy text of the printing</h6>
                </div>
                <div class="p-1 pt-1 text-center">
                    <input type="checkbox" class="checkbox" id="subscribe">
                    <label for="subscribe" class="form-label" style="opacity: 50%;">Subscribe NewsLatter</label>
                </div>
                <button type="submit" class="btn btn-primary">Previous</button>
                <button type="submit" class="btn btn-primary disabled">Next</button>
            </form>
        </div>

        <div class="square col-2 bg-light"></div>
        <div class="col-5 mt-6 pb-1 card">
            <h6 class="card-title mb-1 mt-2"><b>Wizard with validation</b></h6>
            <form class="p-1 pt-1">
                <div class="mb-1 btn-group" style="width: 100%;">
                    <button type="submit" class="btn btn-primary"><b>PROFILE</b></button>
                    <button type="submit" class="btn btn-light text-primary"><b>ADDRESS</b></button>
                    <button type="submit" class="btn btn-light text-primary"><b>FINAL</b></button>
                </div>
                <div class="mb-1">
                    <label for="username2" class="form-label"><b style="opacity: 50%;">Name</b></label>
                    <input type="password" id="username2" class="form-control" placeholder="Password">
                </div>
                <div class="mb-1">
                    <label for="email2" class="form-label"><b style="opacity: 50%;">Email</b></label>
                    <input type="email" id="email2" class="form-control" placeholder="Email">
                </div>
                <div class="mb-1">
                    <label for="password2" class="form-label"><b style="opacity: 50%;">Password</b></label>
                    <input type="password" id="password2" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary disabled">Previous</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>
