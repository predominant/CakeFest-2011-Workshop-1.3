<?php
/* Instructors Test cases generated on: 2011-09-01 21:36:59 : 1314877019*/
App::import('Controller', 'Instructors');

class TestInstructorsController extends InstructorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InstructorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.instructor', 'app.user', 'app.student', 'app.course', 'app.courses_student');

	function startTest() {
		$this->Instructors =& new TestInstructorsController();
		$this->Instructors->constructClasses();
	}

	function endTest() {
		unset($this->Instructors);
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
