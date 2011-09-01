<?php
/* CoursesStudent Test cases generated on: 2011-09-01 21:24:53 : 1314876293*/
App::import('Model', 'CoursesStudent');

class CoursesStudentTestCase extends CakeTestCase {
	var $fixtures = array('app.courses_student', 'app.student', 'app.course', 'app.instructor');

	function startTest() {
		$this->CoursesStudent =& ClassRegistry::init('CoursesStudent');
	}

	function endTest() {
		unset($this->CoursesStudent);
		ClassRegistry::flush();
	}

}
