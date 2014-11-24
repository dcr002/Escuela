<?php
App::uses('DatoPadre', 'Model');

/**
 * DatoPadre Test Case
 *
 */
class DatoPadreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dato_padre',
		'app.alumno',
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
		$this->DatoPadre = ClassRegistry::init('DatoPadre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DatoPadre);

		parent::tearDown();
	}

}
