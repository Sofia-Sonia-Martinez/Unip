<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../services/PerfilDelUsuarioAlumno.php';
require_once '../services/UsuarioAlumnoRegistrado.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $objetivo = $_POST["objetivo"];
  
  $emailRegex="/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,4}$/";
  $objetivoRegex="/^.{10,50}$/";

  $errores = [];
  if (!preg_match($objetivoRegex, $objetivo) && !empty($objetivo)) {
    $errores[] = "El objetivo debe tener entre 10 y 50 caracteres.";
  }

  if (!preg_match($emailRegex, $email) && !empty($email)) {
    $errores[] = "Debe ser un email valido.";
  }


  if (!empty($errores)) {
    foreach ($errores as $error) {
      echo $error . "<br>";
    }
  } else {
    echo "Registro exitoso. ¡Bienvenido!";
  }
}
?>

