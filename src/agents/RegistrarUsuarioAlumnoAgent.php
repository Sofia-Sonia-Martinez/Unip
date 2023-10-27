<?php

require '../conexion/connection.php';

error_reporting(E_ALL);

ini_set('display_errors', 1);
class RegistrarUsuarioAlumnoAgent {
    public function insertarDatos($datosDeRegistro) {
    $conexion = Connection::getInstance();
    $mysqli = $conexion->getDataBaseInstance();
    
    $stmt = $mysqli->prepare("INSERT INTO alumno (objetivo, email) VALUES (?,?)");
    
    $stmt->bind_param("ss", $datosDeRegistro['objetivo'],$datosDeRegistro['email']);
    
    if ($stmt->execute()) {
      echo "Inserción exitosa.";
    } else {
      echo "Error en la inserción: " . $stmt->error;
    }
    
    $stmt->close();
    $mysqli->close();  }
}

