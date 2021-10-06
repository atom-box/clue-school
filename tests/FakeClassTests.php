<?php
require 'FakeClass.php';
 
class FakeClassTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new FakeClass();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}