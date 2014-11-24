<?php
App::uses('DatoVivienda', 'Model');

/**
 * DatoVivienda Test Case
 *
 */
class DatoViviendaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dato_vivienda',
		'app.dato_representante',
		'app.lugar_nacimiento',
		'app.alumno',
		'app.dato_padre',
		'app.lugar_residencia',
		'app.dato_carga',
		'app.dato_representado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DatoVivienda = ClassRegistry::init('DatoVivienda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DatoVivienda);

		parent::tearDown();
	}

}
