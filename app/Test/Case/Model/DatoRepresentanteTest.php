<?php
App::uses('DatoRepresentante', 'Model');

/**
 * DatoRepresentante Test Case
 *
 */
class DatoRepresentanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dato_representante',
		'app.lugar_nacimiento',
		'app.alumno',
		'app.dato_padre',
		'app.lugar_residencia',
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
		$this->DatoRepresentante = ClassRegistry::init('DatoRepresentante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DatoRepresentante);

		parent::tearDown();
	}

}
