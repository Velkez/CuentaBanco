<?php
require_once ('../database/conexion.php');
require_once ('../funciones/controller.php');
$db = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //no registrar un correo ya existente
  $confirm = false;
  $arrayEmail = $db->prepare("SELECT email FROM usuario");
  $arrayEmail->execute();
  $emails = $arrayEmail->fetchAll(PDO::FETCH_ASSOC);
  foreach ($emails as $i) {
    $i = $i['email'];
    if ($i == $email) {
      $confirm = true;
    }
  }
  if ($confirm === false) {
    if (!empty($nombre) && !empty($email) && !empty($password)) {
      registrarUsuario($nombre, $email, $password);
      header("Location: ../views/login.php");
      exit();
    } else {
      echo "No puede dejar campos vacios";
    }
  }
  echo "El correo ya existe";
  header("Location: ../views/registro.php");
  exit();

} else {
  echo "ERROR";
}
?>