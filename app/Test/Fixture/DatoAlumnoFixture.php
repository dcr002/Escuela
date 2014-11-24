<?php
/**
 * DatoAlumnoFixture
 *
 */
class DatoAlumnoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'talla_pantalon' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'talla_camisa' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'talla_zapatos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'peso' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estatura' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'isBecado' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tipo_beca' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'alumno_id' => 1,
			'talla_pantalon' => 'Lorem ipsum dolor sit amet',
			'talla_camisa' => 'Lorem ipsum dolor sit amet',
			'talla_zapatos' => 'Lorem ipsum dolor sit amet',
			'peso' => 'Lorem ipsum dolor sit amet',
			'estatura' => 'Lorem ipsum dolor sit amet',
			'isBecado' => 1,
			'tipo_beca' => 'Lorem ipsum dolor sit amet'
		),
	);

}
