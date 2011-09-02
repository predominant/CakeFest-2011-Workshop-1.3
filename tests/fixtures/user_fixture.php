<?php
/* User Fixture generated on: 2011-09-01 21:24:54 : 1314876294 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sex' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'user-1',
			'email' => 'graham@grahamweldon.com',
			'password' => 'Password',
			'name' => 'Graham Weldon',
			'sex' => 'M',
			'created' => '2011-09-01 21:24:54',
			'modified' => '2011-09-01 21:24:54'
		),
		array(
			'id' => 'user-2',
			'email' => 'graham-2@grahamweldon.com',
			'password' => 'Password',
			'name' => 'Ms Weldon',
			'sex' => 'F',
			'created' => '2011-09-01 21:24:54',
			'modified' => '2011-09-01 21:24:54'
		),
		array(
			'id' => 'user-3',
			'email' => 'mark@mark-story.com',
			'password' => 'Password',
			'name' => 'Mark',
			'sex' => 'M',
			'created' => '2011-09-01 21:24:54',
			'modified' => '2011-09-01 21:24:54'
		),
	);
}
