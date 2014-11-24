<?php
App::uses('Matricula', 'Model');

/**
 * Matricula Test Case
 *
 */
class MatriculaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.matricula'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Matricula = ClassRegistry::init('Matricula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Matricula);

		parent::tearDown();
	}

}
