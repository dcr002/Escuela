<?php
App::uses('DatoAlumno', 'Model');

/**
 * DatoAlumno Test Case
 *
 */
class DatoAlumnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dato_alumno',
		'app.alumno',
		'app.dato_padre',
		'app.dato_representante',
		'app.lugar_nacimiento',
		'app.lugar_residencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DatoAlumno = ClassRegistry::init('DatoAlumno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DatoAlumno);

		parent::tearDown();
	}

}
