<?php
require_once 'person.php';
class PersonTEst extends PHPUnit_framework_TestCase{

	public $test;
	public function setUp(){
		$this->test = new Person("Jason");
	}

	public function testName(){
		$jason = $this->test->getName();
		$this->assertTrue($jason == "Jason");
	}
}
?>