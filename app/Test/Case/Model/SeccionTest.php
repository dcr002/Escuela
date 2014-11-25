<?php
App::uses('Seccion', 'Model');

/**
 * Seccion Test Case
 *
 */
class SeccionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seccion',
		'app.grado',
		'app.periodo_academico',
		'app.matricula'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seccion = ClassRegistry::init('Seccion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seccion);

		parent::tearDown();
	}

}
