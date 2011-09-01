<?php
/* Courses Test cases generated on: 2011-09-01 21:36:59 : 1314877019*/
App::import('Controller', 'Courses');

class TestCoursesController extends CoursesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CoursesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.instructor', 'app.user', 'app.student', 'app.courses_student');

	function startTest() {
		$this->Courses =& new TestCoursesController();
		$this->Courses->constructClasses();
	}

	function endTest() {
		unset($this->Courses);
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
