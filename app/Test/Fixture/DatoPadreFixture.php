<?php
/**
 * DatoPadreFixture
 *
 */
class DatoPadreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre_madre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 254, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cedula_madre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telf_madre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre_padre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 254, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cedula_padre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telf_padre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'nombre_madre' => 'Lorem ipsum dolor sit amet',
			'cedula_madre' => 'Lorem ipsum dolor sit amet',
			'telf_madre' => 'Lorem ipsum dolor sit amet',
			'nombre_padre' => 'Lorem ipsum dolor sit amet',
			'cedula_padre' => 'Lorem ipsum dolor sit amet',
			'telf_padre' => 'Lorem ipsum dolor sit amet',
			'alumno_id' => 1
		),
	);

}
