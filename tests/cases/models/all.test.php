<?php
/* all Test cases generated on: 2011-09-02 23:40:43 : 1314970843*/
App::import('model', 'all');

class allTestCase extends CakeTestCase {
	function startTest() {
		$this->all =& ClassRegistry::init('all');
	}

	function endTest() {
		unset($this->all);
		ClassRegistry::flush();
	}

}
