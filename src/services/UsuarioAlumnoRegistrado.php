<?php

error_reporting(E_ALL);

ini_set('display_errors', 1); 
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
    protected $objetivo;

    public function __construct($datosDeRegistro) {
      /*$this->nombreCompleto = $datosDeRegistro['nombreCompleto'];
      $this->email = $datosDeRegistro['email'];
      $this->foto = $datosDeRegistro['foto'];
      $this->datosPersonales = $datosDeRegistro['datosPersonales'];
      $this->dni = $datosDeRegistro['dni'];
      $this->celular = $datosDeRegistro['celular'];
      $this->anoDeNacimiento = $datosDeRegistro['anoDeNacimiento'];
      $this->skills = $datosDeRegistro['skills'];
      $this->materiasAprobadas = $datosDeRegistro['materiasAprobadas'];
      $this->preferenciaDeTrabajo = $datosDeRegistro['preferenciaDeTrabajo'];
       */
      $this->objetivo = $datosDeRegistro['objetivo']; 
      $this->email = $datosDeRegistro['email']; 
    }
   /* public function agregarSkill(){
      return $datosDeRegistro['skill'];
   }*/

}
