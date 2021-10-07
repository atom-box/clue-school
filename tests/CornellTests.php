<?php

use PHPUnit\Framework\TestCase;
use App\Controller\CornellController;

class CornellTests extends TestCase
{
    private $speechScript;
    private $cornellian;
 
 
    public function testCanBeCreatedFromValidString()
    {
        $this->speechScript = "Take me to the Limburger I saw so often in the past.";
        $this->assertInstanceOf(
            CornellController::class,
            CornellController::fromString($this->speechScript)
        );
    }
 
}