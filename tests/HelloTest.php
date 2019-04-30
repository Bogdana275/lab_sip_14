<?php

use \PHPUnit\Framework\TestCase;


class HelloTest extends TestCase
{
    public function testIndexPage()
    {
        $hello = new Hello("John");

        $this->assertEquals("Hello, John! How are you?", $hello->index());
    }
}