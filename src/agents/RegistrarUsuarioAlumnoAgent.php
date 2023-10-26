<?php

require 'src/conexion/connetion.php';

error_reporting(E_ALL);

ini_set('display_errors', 1);
class RegistrarUsuarioAlumnoAgent implements  RegistrarUsuarioInterface{
  public function consultarDatos() {
    $conexion = Connection::getInstance();
    $mysqli = $conexion->getDataBaseInstance();
    $query = "SELECT objetivo, email FROM tabla_nombre";
    $resultado = $mysqli->query($query);

    if ($resultado) {
      while ($fila = $resultado->fetch_assoc()) {
        $objetivo = $fila['objetivo'];
        $email = $fila['email'];
        echo "Objetivo: $objetivo, Email: $email<br>";
      }
    } else {
      echo "Error en la consulta: " . $mysqli->error;
    }
    $conexion->close();
  }
}
}

