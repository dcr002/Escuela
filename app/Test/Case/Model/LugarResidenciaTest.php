<?php
App::uses('LugarResidencia', 'Model');

/**
 * LugarResidencia Test Case
 *
 */
class LugarResidenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lugar_residencia',
		'app.estado',
		'app.lugar_nacimiento',
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
		$this->LugarResidencia = ClassRegistry::init('LugarResidencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LugarResidencia);

		parent::tearDown();
	}

}
