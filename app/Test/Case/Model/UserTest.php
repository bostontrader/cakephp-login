<?php
App::uses('User', 'Model');

class UserTest extends CakeTestCase {

	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

}
?>