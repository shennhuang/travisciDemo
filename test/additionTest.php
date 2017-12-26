<?php

use PHPUnit\Framework\TestCase;
require_once 'addition.php';

class additionTest extends TestCase
{

    public function testAdd()
    {
        $mathh = new Mathh;
        $this->assertEquals(3, $mathh->add(1, 2));
    } 
     
}
