<?php
App::uses('PeriodoAcademico', 'Model');

/**
 * PeriodoAcademico Test Case
 *
 */
class PeriodoAcademicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.periodo_academico',
		'app.grado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeriodoAcademico = ClassRegistry::init('PeriodoAcademico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeriodoAcademico);

		parent::tearDown();
	}

}
