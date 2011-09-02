<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Instructor' => array(
			'className' => 'Instructor',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'user_id',
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

	public $typeOptions = array(
		'instructor' => 'Instructor',
		'student' => 'Student',
	);
	
	public $sexOptions = array(
		'M' => 'Male',
		'F' => 'Female'
	);

	public $_findMethods = array(
		'males' => true,
	);
	
	public function _findMales($state, $query, &$results = null) {
		if ($state === 'before') {
			$query['conditions'] = array(
				'sex' => 'M',
			);
			return $query;
		}
		
		return $results;
	}
	
	public function beforeSave($options = array()) {
		$slug = strtolower(Inflector::slug($this->data['User']['name'], '-'));
		$this->data['User']['slug'] = $slug;
		
		return parent::beforeSave($options);
	}
}












