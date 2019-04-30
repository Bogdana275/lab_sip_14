<?php

use tests\HelloTest;
class Hello {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function index()
    {
        return "Hello, " . $this->name;
    }
}