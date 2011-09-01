<?php
/* Instructor Test cases generated on: 2011-09-01 21:24:53 : 1314876293*/
App::import('Model', 'Instructor');

class InstructorTestCase extends CakeTestCase {
	var $fixtures = array('app.instructor', 'app.course', 'app.student', 'app.courses_student');

	function startTest() {
		$this->Instructor =& ClassRegistry::init('Instructor');
	}

	function endTest() {
		unset($this->Instructor);
		ClassRegistry::flush();
	}

}
