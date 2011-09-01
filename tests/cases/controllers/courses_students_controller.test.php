<?php
/* CoursesStudents Test cases generated on: 2011-09-01 21:36:59 : 1314877019*/
App::import('Controller', 'CoursesStudents');

class TestCoursesStudentsController extends CoursesStudentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CoursesStudentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.courses_student', 'app.student', 'app.user', 'app.instructor', 'app.course');

	function startTest() {
		$this->CoursesStudents =& new TestCoursesStudentsController();
		$this->CoursesStudents->constructClasses();
	}

	function endTest() {
		unset($this->CoursesStudents);
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
