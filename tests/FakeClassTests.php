<?php

use PHPUnit\Framework\TestCase;
require 'FakeClass.php';
 
class FakeClassTests extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new FakeClass();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}