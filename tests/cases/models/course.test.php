<?php
/* Course Test cases generated on: 2011-09-01 21:24:53 : 1314876293*/
App::import('Model', 'Course');

class CourseTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.instructor', 'app.student', 'app.courses_student');

	function startTest() {
		$this->Course =& ClassRegistry::init('Course');
	}

	function endTest() {
		unset($this->Course);
		ClassRegistry::flush();
	}

}
