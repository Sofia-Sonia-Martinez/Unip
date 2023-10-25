<?php

class PerfilDelUsuarioAlumno {
    private $nombreDeUsuario;
    private $contrasena;
    private $estaLogeado=false;

    public function __construct($nombreDeUsuario, $contrasena) {
        $this->nombreDeUsuario = $nombreDeUsuario;
        $this->contrasena = $contrasena;
        $this->estaLogeado = $false;
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

    public function register($nombreDeUsuario, $contrasena, $datosDeRegistro) {
      $usuarioRegistrado = new UsuarioAlumnoRegistrado($nombreDeUsuario, $contrasena, $datosDeRegistro);
      return $usuarioRegistrado;
    }

    public function estaLogeado() {
        return $this->estaLogeado;
    }

}
