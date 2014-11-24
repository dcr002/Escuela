<?php
/**
 * DatoViviendaFixture
 *
 */
class DatoViviendaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tenencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'paredes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'techo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pisos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'habitaciones' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'isSala' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isComedor' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'banos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'isGaraje' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isPatio' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isElectricidad' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isAgua' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isCloacas' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isAseo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isTelefono' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isAlumbrado' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isAsfalto' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isCable' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'especifique_servicio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 254, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dato_representante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tenencia' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'paredes' => 'Lorem ipsum dolor sit amet',
			'techo' => 'Lorem ipsum dolor sit amet',
			'pisos' => 'Lorem ipsum dolor sit amet',
			'habitaciones' => 1,
			'isSala' => 1,
			'isComedor' => 1,
			'banos' => 1,
			'isGaraje' => 1,
			'isPatio' => 1,
			'isElectricidad' => 1,
			'isAgua' => 1,
			'isCloacas' => 1,
			'isAseo' => 1,
			'isTelefono' => 1,
			'isAlumbrado' => 1,
			'isAsfalto' => 1,
			'isCable' => 1,
			'especifique_servicio' => 'Lorem ipsum dolor sit amet',
			'dato_representante_id' => 1
		),
	);

}
