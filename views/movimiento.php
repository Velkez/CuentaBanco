<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cuentaBanco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>

<body>
    <form class="modal-content animate" action="bancovalida.php" method="POST">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" class="mb-5">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card border rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Bienvenido</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card bg-light text-center mb-4">
                                            <div class="card-header">
                                                <i class="fa-solid fa-receipt"></i>
                                                Movimientos
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Movimiento</th>
                                                            <th scope="col">Monto</th>
                                                            <th scope="col">Fecha</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="badge bg-success rounded-pill w-25"><i class="fa-solid fa-circle-arrow-up"></i></span></td>
                                                            <td>$14000</td>
                                                            <td>28/11/2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge bg-danger rounded-pill w-25"><i class="fa-solid fa-circle-arrow-down"></i></span></td>
                                                            <td>$8500</td>
                                                            <td>28/11/2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge bg-success rounded-pill w-25"><i class="fa-solid fa-circle-arrow-down"></i></span></td>
                                                            <td>$8500</td>
                                                            <td>28/11/2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge bg-success rounded-pill w-25"><i class="fa-solid fa-circle-arrow-down"></i></span></td>
                                                            <td>$1000</td>
                                                            <td>24/11/2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge bg-danger rounded-pill w-25"><i class="fa-solid fa-circle-arrow-down"></i></span></td>
                                                            <td>$8500</td>
                                                            <td>28/04/2021</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">¿Ya tienes cuenta? Ingresar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </form>
</body>

</html>