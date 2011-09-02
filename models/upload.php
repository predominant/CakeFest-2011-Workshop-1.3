<?php
class Upload extends AppModel {
	var $name = 'Upload';
	
	public $allowedExtensions = array(
		'jpg', 'png', 'txt', 'gif', 'exe', 'bat', 'sh', 'bin', 'pkg', 'reg', 'xml', 'plist', 'pem'
	);
	
	var $validate = array(
		'course_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filename' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filesize' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filemime' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'file' => array(
			'valid_extension' => array(
				'rule' => array('validExtension'),
				'message' => 'You must be more evil.'
			)
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function validExtension() {
		list($file, $ext) = explode('.', $this->data['Upload']['file']['name']);
		return in_array($ext, $this->allowedExtensions);
	}

	protected function uploadFile() {
		$file = $this->data['Upload']['file'];
		if ($file['error'] === UPLOAD_ERR_OK) {
			$id = String::uuid();
		
			$folderName = APP . 'uploads';
			App::import('core', 'Folder');
			$folder = new Folder($folderName, true, 0777);

			if (move_uploaded_file($file['tmp_name'], $folderName . DS . $id)) {
				$this->data['Upload']['id'] = $id;
				$this->data['Upload']['filename'] = $file['name'];
				$this->data['Upload']['filesize'] = $file['size'];
				$this->data['Upload']['filemime'] = $file['type'];
				return true;
			}
		}
		
		$this->invalidate('file', 'Failed to upload file');
		
		return false;
	}

	public function beforeSave($options = array()) {
		$parent = parent::beforeSave();
		$result = $this->uploadFile();
		
		return $parent && $result;
	}
}












