<?php
App::uses('DatoCarga', 'Model');

/**
 * DatoCarga Test Case
 *
 */
class DatoCargaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dato_carga',
		'app.dato_representante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DatoCarga = ClassRegistry::init('DatoCarga');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DatoCarga);

		parent::tearDown();
	}

}
