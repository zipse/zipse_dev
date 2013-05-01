<?php
App::uses('AppModel', 'Model');
/**
 * CreationType Model
 *
 * @property Creation $Creation
 */
class CreationType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'type';
	
	
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Creation' => array(
			'className' => 'Creation',
			'foreignKey' => 'creation_type_id',
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
