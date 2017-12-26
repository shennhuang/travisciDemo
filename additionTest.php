<?php

require_once './addition.php';

class additionTest extends TestCase{

    public function testMathh(){
        $math = new Mathh;
        $this->asserEqual(3,$math->add(1,2));
    } 
     
}
