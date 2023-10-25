<?php
 
class UsuarioAlumnoRegistrado{
    protected $nombreCompleto;
    protected $email;
    protected $foto;
    protected $datosPersonales;
    protected $dni;
    protected $celular;
    protected $anoDeNacimiento;
    protected $skills;
    protected $materiasAprobadas;
    protected $preferenciaDeTrabajo;

    public function __construct($nombreDeUsuario, $contrasena,$datosDeRegistro) {
      $this->nombreCompleto = $datosDeRegistro['nombreCompleto'];
      $this->email = $datosDeRegistro['email'];
      $this->foto = $datosDeRegistro['foto'];
      $this->datosPersonales = $datosDeRegistro['datosPersonales'];
      $this->dni = $datosDeRegistro['dni'];
      $this->celular = $datosDeRegistro['celular'];
      $this->anoDeNacimiento = $datosDeRegistro['anoDeNacimiento'];
      $this->skills = $datosDeRegistro['skills'];
      $this->materiasAprobadas = $datosDeRegistro['materiasAprobadas'];
      $this->preferenciaDeTrabajo = $datosDeRegistro['preferenciaDeTrabajo'];
    }

}
