<?php

// src/AppBundle/Tests/Util/CalculatorTest.php
namespace ParkBundle\Tests\Services;

use ParkBundle\Services\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSomme()
    {
        $calc = new Calculator();
        $result = $calc->somme(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(420, $result);

    }
}