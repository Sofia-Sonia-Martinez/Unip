<?php
require_once 'src/services/PerfilDelUsuarioAlumno.php';
require_once 'src/services/UsuarioAlumnoRegistrado.php';

class UsuarioAlumnoRegistradoTest extends PHPUnit\Framework\TestCase {
    public function testClaseUsuarioAlumnoRegistradoExiste() {
        $rutaClase = 'src/services/UsuarioAlumnoRegistrado.php';
        $this->assertFileExists($rutaClase);
        require_once $rutaClase;
        $this->assertTrue(class_exists("UsuarioAlumnoRegistrado"));
    }
}
