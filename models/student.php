<?php
class Student extends AppModel {
	var $name = 'Student';
	var $validate = array(
		'user_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'twitter' => array(
			'twitterformat' => array(
				'rule' => '/^@?[A-Z0-9_]{1,15}$/i',
				'message' => 'Invalid Twitter username format',
				'allowEmpty' => true,
				'required' => false,
			)
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'courses_students',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'course_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

	public function beforeSave($options = array()) {
		$this->data['Student']['twitter'] = ltrim($this->data['Student']['twitter'], '@');
		return parent::beforeSave($options);
	}
	
	public function afterFind($results, $primary = false) {
		$results = parent::afterFind($results, $primary);
		
		// If multiple records were returned
		foreach ($results as &$student) {
			if (isset($student['Student']) && !empty($student['Student']['twitter'])) {
				$tweets = $this->tweets($student['Student']['twitter']);
				$student['Student']['tweets'] = $tweets;
			}
		}
		
		// If a single record was returned
		if (!empty($results['twitter'])) {
			$tweets = $this->tweets($results['twitter']);
			$results['tweets'] = $tweets;
		}

		return $results;
	}
	
	public function tweets($id) {
		App::import('core', 'HttpSocket');
		$socket = new HttpSocket();
		$data = $socket->get(
			'http://search.twitter.com/search.json',
			array('q' => 'from:' . $id)
		);
		
		$data = json_decode($data, true);
		return $data['results'];
	}
}















