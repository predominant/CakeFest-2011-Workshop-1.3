<?php
/* CoursesStudent Fixture generated on: 2011-09-01 21:24:53 : 1314876293 */
class CoursesStudentFixture extends CakeTestFixture {
	var $name = 'CoursesStudent';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'student_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'course_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '4e5f6b85-6b54-4c83-b809-4a24c3b782d2',
			'student_id' => 'Lorem ipsum dolor sit amet',
			'course_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
