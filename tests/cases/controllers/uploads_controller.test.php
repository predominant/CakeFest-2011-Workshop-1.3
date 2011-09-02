<?php
/* Uploads Test cases generated on: 2011-09-03 01:32:57 : 1314977577*/
App::import('Controller', 'Uploads');

class TestUploadsController extends UploadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UploadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.upload', 'app.course', 'app.instructor', 'app.user', 'app.student', 'app.courses_student');

	function startTest() {
		$this->Uploads =& new TestUploadsController();
		$this->Uploads->constructClasses();
	}

	function endTest() {
		unset($this->Uploads);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
