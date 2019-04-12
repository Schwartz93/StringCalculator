<?php

require "../vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use App\Calculate;

class FirstStepTest extends TestCase
{
    /**
     * @test
     */
    public function testThatAssertsTrue()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function testThatAddReturnsString()
    {
        $calc = new Calculate();
        $this->assertInternalType('string', $calc->add("", "3", "4","3", "78"));
    }


}
