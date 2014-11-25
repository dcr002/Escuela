<?php
App::uses('AppModel', 'Model');
/**
 * PeriodoAcademico Model
 *
 * @property Grado $Grado
 */
class PeriodoAcademico extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'periodo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                        'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Período Académico Existente.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Grado' => array(
			'className' => 'Grado',
			'foreignKey' => 'periodo_academico_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
