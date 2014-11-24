<?php
App::uses('DatoRepresentado', 'Model');

/**
 * DatoRepresentado Test Case
 *
 */
class DatoRepresentadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dato_representado',
		'app.dato_representante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DatoRepresentado = ClassRegistry::init('DatoRepresentado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DatoRepresentado);

		parent::tearDown();
	}

}
