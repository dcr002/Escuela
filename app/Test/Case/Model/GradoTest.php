<?php
App::uses('Grado', 'Model');

/**
 * Grado Test Case
 *
 */
class GradoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grado',
		'app.periodo_academico',
		'app.seccion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grado = ClassRegistry::init('Grado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grado);

		parent::tearDown();
	}

}
