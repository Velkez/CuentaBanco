<?php

require_once ('../database/conexion.php');
require_once ('../funciones/controller.php');
$db = conectar();

session_start();

if (!isset($_SESSION['email'])) {
  header("Location: ../index.php");
  exit();
}

$emailUsuario = $_SESSION['email'];

$datosUsuario = getDatosUsuario($emailUsuario, $db);

if (!$datosUsuario) {
  echo "Usuario no encontrado.";
  exit();
}

$id_usuario = $datosUsuario['ID'];
$saldoDisponible = $datosUsuario['saldo'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $idUsuarioDestinatario = $_POST['destinatario'];
  $montoTransferencia = $_POST['monto'];

  if (realizarTransferencia($id_usuario, $saldoDisponible, $idUsuarioDestinatario, $montoTransferencia, $db)) {
    header("Location: ../views/dashboard2.php");
    exit();
  } else {
    echo "Transferencia no válida. ";
  }
}
?>