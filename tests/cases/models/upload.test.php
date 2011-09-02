<?php
/* Upload Test cases generated on: 2011-09-03 01:31:25 : 1314977485*/
App::import('Model', 'Upload');

class UploadTestCase extends CakeTestCase {
	var $fixtures = array('app.upload', 'app.course', 'app.instructor', 'app.user', 'app.student', 'app.courses_student');

	function startTest() {
		$this->Upload =& ClassRegistry::init('Upload');
	}

	function endTest() {
		unset($this->Upload);
		ClassRegistry::flush();
	}

}
