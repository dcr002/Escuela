<?php
/**
 * DatoRepresentanteFixture
 *
 */
class DatoRepresentanteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cedula' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_nac' => array('type' => 'date', 'null' => false, 'default' => null),
		'lugar_nacimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado_civil' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grado_instruccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'isTrabaja' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'tipo_empleo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ingresos' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'parentesco' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'jefe_hogar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 254, 'collate' => 'utf8_general_ci', 'comment' => 'Nombre de la Persona cabeza de casa', 'charset' => 'utf8'),
		'isJefeTrabaja' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'personas_aportan' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '¿Cuantas Personas Aportan economicamente al hogar?'),
		'total_ingresos' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'egreso_alimentacion' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'egreso_salud' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'egreso_servicios' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'egreso_otros' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
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
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'cedula' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit amet',
			'fecha_nac' => '2014-09-24',
			'lugar_nacimiento_id' => 1,
			'telefono' => 'Lorem ipsum dolor sit amet',
			'estado_civil' => 'Lorem ipsum dolor sit amet',
			'grado_instruccion' => 'Lorem ipsum dolor sit amet',
			'isTrabaja' => 1,
			'tipo_empleo' => 'Lorem ipsum dolor sit amet',
			'ingresos' => '',
			'parentesco' => 'Lorem ipsum dolor sit amet',
			'jefe_hogar' => 'Lorem ipsum dolor sit amet',
			'isJefeTrabaja' => 1,
			'personas_aportan' => 1,
			'total_ingresos' => '',
			'egreso_alimentacion' => '',
			'egreso_salud' => '',
			'egreso_servicios' => '',
			'egreso_otros' => '',
			'alumno_id' => 1
		),
	);

}
