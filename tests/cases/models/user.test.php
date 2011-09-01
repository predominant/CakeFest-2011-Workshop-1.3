<?php
/* User Test cases generated on: 2011-09-01 21:24:54 : 1314876294*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.instructor', 'app.course', 'app.student', 'app.courses_student');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
