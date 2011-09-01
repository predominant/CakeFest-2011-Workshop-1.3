<?php
/* Student Test cases generated on: 2011-09-01 21:24:53 : 1314876293*/
App::import('Model', 'Student');

class StudentTestCase extends CakeTestCase {
	var $fixtures = array('app.student', 'app.course', 'app.instructor', 'app.courses_student');

	function startTest() {
		$this->Student =& ClassRegistry::init('Student');
	}

	function endTest() {
		unset($this->Student);
		ClassRegistry::flush();
	}

}
