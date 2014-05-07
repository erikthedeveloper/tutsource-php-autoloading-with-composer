<?php

class UselessClass {

    protected $foo;

    /**
     * [__construct description]
     * @param string $foo
     */
    public function __construct($foo = 'bar')
    {
        $this->foo = $foo;
    }

    /**
     * [getFoo description]
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }
}