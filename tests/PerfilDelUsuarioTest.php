<?php
require_once 'src/services/PerfilDelUsuarioAlumno.php';
require_once 'src/services/UsuarioAlumnoRegistrado.php';

class PerfilDelUsuarioTest extends PHPUnit\Framework\TestCase {
    public function testClasePerfilDelUsuarioExiste() {
        $rutaClase = 'src/services/PerfilDelUsuarioAlumno.php';
        $this->assertFileExists($rutaClase);
        require_once $rutaClase;
        $this->assertTrue(class_exists('PerfilDelUsuarioAlumno'));
    }
    public function testMetodoLoginCreado() {
        $clasePerfilDelUsuarioAlumno = 'PerfilDelUsuarioAlumno';
        $login = 'login';
        $this->assertTrue(method_exists($clasePerfilDelUsuarioAlumno,$login));
    }
    public function testMetodoLoginRetornaBooleano() {
      $clasePerfilDelUsuarioAlumno = new PerfilDelUsuarioAlumno("Sofia","1234");
      $resultado = $clasePerfilDelUsuarioAlumno->login("Sofia","1234");
      $this->assertTrue($resultado);
    }
 
    public function testMetodoLogoutCreado() {
      $clasePerfilDelUsuarioAlumno = 'PerfilDelUsuarioAlumno';
      $logout = 'logout';
      $this->assertTrue(method_exists($clasePerfilDelUsuarioAlumno,$logout));
 
    }
    public function testMetodoLogoutRetornaBooleano() {
      $objetoPerfilDelUsuario = new PerfilDelUsuarioAlumno("Sofia","1234");
      $objetoPerfilDelUsuario->login("Sofia","1234");
      $resultado = $objetoPerfilDelUsuario->logout();
      $this->assertTrue($resultado);
      $resultadoEstaLogeado= $objetoPerfilDelUsuario->estaLogeado();
      $this->assertFalse($resultadoEstaLogeado);
    }
    public function testMetodoRegisterCreado() {
      $clasePerfilDelUsuarioAlumno = 'PerfilDelUsuarioAlumno';
      $register = 'register';
      $this->assertTrue(method_exists($clasePerfilDelUsuarioAlumno,$register));
 
    }

    public function testMetodoRegisterRetornaCreacionObjetoUsuarioAlumnoRegistrado() {
      $datosDeRegistro = array(
        'nombreCompleto' => 'Nombre Completo Aleatorio',
        'email' => 'correo@ejemplo.com',
        'foto' => 'ruta/a/una/foto.jpg',
        'datosPersonales' => 'Información personal aleatoria',
        'dni' => '123456789',
        'celular' => '123-456-7890',
        'anoDeNacimiento' => 1990,
        'skills' => 'Habilidades aleatorias',
        'materiasAprobadas' => 'Materias aprobadas aleatorias',
        'preferenciaDeTrabajo' => 'Preferencia de trabajo aleatoria'
      ); 
      $clasePerfilDelUsuarioAlumno = new PerfilDelUsuarioAlumno('Sofia', '1234');
      $usuarioRegistrado = $clasePerfilDelUsuarioAlumno->register('Sofia', '1234',$datosDeRegistro);
      $this->assertInstanceOf(UsuarioAlumnoRegistrado::class, $usuarioRegistrado);
    }
}
