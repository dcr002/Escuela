<?php
App::uses('Alumno', 'Model');

/**
 * Alumno Test Case
 *
 */
class AlumnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Alumno = ClassRegistry::init('Alumno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumno);

		parent::tearDown();
	}

}
