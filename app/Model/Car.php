<?php
App::uses('AppModel', 'Model');
/**
 * Car Model
 *
 */
class Car extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'car';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
