<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ramón</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
<div class="container">
    <main>
        <div class="text-center">
            <form>
                <header class="d-flex justify-content-center py-3">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#"class="nav-link active" aria-current="page"><i class="bi bi-credit-card"></i>Credd card</a></li>

                        <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-paypal"></i>Paypal</a></li>
                        <li class="nav-item"><a href="#"class="nav-link"><i class="bi bi-bank"></i>Bank Transfer</a></li>
                </header>

                <div class="alert alert-primary" role="alert">Este formulario tiene texto de éxito o  puede tener algún error</div>

                <label for="nombre" class="form-label">Nombre completo (en la tarjeta)</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>

                <label for="apellidos" class="form-label">Numero de tarjeta</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>

                <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                    <label for="cc-cvv" class="form-label">CV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg">Guardar</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        </div>
    </main>
</div>

</body>
</html>
