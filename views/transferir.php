
<?php
require_once('../database/conexion.php');
$db = conectar();

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
    exit();
}

$emailUsuario = $_SESSION['email'];

$consultaUsuario = $db->prepare("
    SELECT usuario.nombre AS NombreUsuario, cuenta.saldo
    FROM usuario
    JOIN cuenta ON usuario.id_usuario = cuenta.fk_usuario
    WHERE usuario.email = :email
");
$consultaUsuario->bindParam(':email', $emailUsuario);
$consultaUsuario->execute();

$resultadoUsuario = $consultaUsuario->fetch(PDO::FETCH_ASSOC);

if ($resultadoUsuario) {
    $nombreUsuario = $resultadoUsuario['NombreUsuario'];
    $saldoUsuario = $resultadoUsuario['saldo'];
} else {
    $nombreUsuario = "Usuario Desconocido";
    $saldoUsuario = 0;
}

if (isset($_POST['cerrar_sesion'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>

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
                                        <form>
                                            <div class="card bg-light text-center mb-4">
                                                <div class="card-header">Ingrese el valor que desea retirar:</div>
                                                <div>
                                                   <span class="badge bg-success rounded-pill w-25">Saldo disponible: $<?php echo $saldoUsuario; ?></span> 
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-control" id="cuenta" type="" placeholder="">
                                                            <option selected></option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="">Seleccione destinatario</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="valort" type="number" placeholder="" />
                                                        <label for="">Valor a transferir</label>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex align-items-center text-center justify-content-between">
                                                    <div class="w-100">
                                                        <a href="" type="button" class="btn btn-outline-warning shadow-sm" style="width: 140px;"><i class="fa-solid fa-arrow-right-arrow-left"></i> Transferir</a>
                                                        <a href="dashboard2.php" type="button" class="btn btn-outline-danger shadow-sm" style="width: 110px;"><i class="fa-solid fa-xmark"></i> Cancelar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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