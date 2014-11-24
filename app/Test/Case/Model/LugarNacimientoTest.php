<?php
App::uses('LugarNacimiento', 'Model');

/**
 * LugarNacimiento Test Case
 *
 */
class LugarNacimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lugar_nacimiento',
		'app.estado',
		'app.lugar_residencia',
		'app.alumno',
		'app.dato_padre',
		'app.dato_representante',
		'app.dato_carga',
		'app.dato_representado',
		'app.dato_vivienda'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LugarNacimiento = ClassRegistry::init('LugarNacimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LugarNacimiento);

		parent::tearDown();
	}

}
