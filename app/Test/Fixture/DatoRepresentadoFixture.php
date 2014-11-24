<?php
/**
 * DatoRepresentadoFixture
 *
 */
class DatoRepresentadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'isViveGrupoFamiliar' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'financista' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'distancia_colegio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'transporte' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'desayuna' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'almuerza' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'presupuesto_diarios' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'isfamiliarBeca' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cuantos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'isPresenteDebilidad' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isVista' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isOido' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isConvulsiones' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'isCasoEspecial' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'otras' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 254, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'observaciones' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'isViveGrupoFamiliar' => 1,
			'financista' => 'Lorem ipsum dolor sit amet',
			'distancia_colegio' => 'Lorem ipsum dolor sit amet',
			'transporte' => 'Lorem ipsum dolor sit amet',
			'desayuna' => 'Lorem ipsum dolor sit amet',
			'almuerza' => 'Lorem ipsum dolor sit amet',
			'presupuesto_diarios' => '',
			'isfamiliarBeca' => 1,
			'cuantos' => 1,
			'isPresenteDebilidad' => 1,
			'isVista' => 1,
			'isOido' => 1,
			'isConvulsiones' => 1,
			'isCasoEspecial' => 1,
			'otras' => 'Lorem ipsum dolor sit amet',
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dato_representante_id' => 1
		),
	);

}
