<?php
/* user Test cases generated on: 2011-09-02 23:40:54 : 1314970854*/
App::import('model', 'user');

class userTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.instructor', 'app.course', 'app.student', 'app.courses_student');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}
	
	public function testMales() {
		$users = $this->User->find('males');
		foreach ($users as $user) {
			$this->assertIdentical($user['User']['sex'], 'M');
		}
		
		$this->assertIdentical(count($users), 2);
		//die();
	}
	
	public function testGenerateSlug() {
		$user = array('User' => array(
			'name' => 'Test User',
			'email' => 'my@emailaddress.com',
			'password' => 'password',
			'sex' => 'F',
		));
		
		$this->User->create($user);
		$this->assertTrue($this->User->save());
		
		$userData = $this->User->read(null, $this->User->id);
		$this->assertIdentical($userData['User']['slug'], 'test-user');
	}

	public function testGenerateFunkySlug() {
		$user = array('User' => array(
			'name' => 'Test Usér ö £¥˙ƒ Hello',
			'email' => 'my@emailaddress.com',
			'password' => 'password',
			'sex' => 'F',
		));
		
		$this->User->create($user);
		$this->assertTrue($this->User->save());
		
		$userData = $this->User->read(null, $this->User->id);
		$this->assertIdentical($userData['User']['slug'], 'test-user-oe-f-hello');
	}
}
