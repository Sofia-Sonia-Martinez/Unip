<?php
require '../agents/RegistrarUsuarioAlumnoAgent.php';
require  'UsuarioAlumnoRegistrado.php';

error_reporting(E_ALL);

ini_set('display_errors', 1);
class PerfilDelUsuario{
  private $nombreDeUsuario;
  private $contrasena;
  private $estaLogeado=false;
  private $datosDeRegistro;

  public function __construct($nombreDeUsuario, $contrasena, $datosDeRegistro) {
    $this->nombreDeUsuario = $nombreDeUsuario;
    $this->contrasena = $contrasena;
    $this->datosDeRegistro = $datosDeRegistro;
    $this->estaLogeado = false;
  }

  public function login($nombreDeUsuario, $contrasena) {
    if (!$this->estaLogeado && $nombreDeUsuario === $this->nombreDeUsuario && $contrasena === $this->contrasena) {
      $this->estaLogeado = true;
      return true;
    } else {
      return false;
    }
  }

  public function logout() {
    if($this->estaLogeado === true){
      $this->estaLogeado = false;
      return true;
    }
    return false;
  }

  public function registro() {

    $agente = new RegistrarUsuarioAlumnoAgent();
    $agente->insertarDatos($this->datosDeRegistro);

    $usuarioRegistrado = new UsuarioAlumnoRegistrado($this->datosDeRegistro);
    return $usuarioRegistrado;
  }

  public function estaLogeado() {
    return $this->estaLogeado;
  }

}
