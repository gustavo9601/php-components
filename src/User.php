<?php

namespace PHPComponentes;

class User
{
    protected $attributes;

    public function __construct(array $attributes = array())
    {
        $this->attributes = $attributes;
    }

    public function __get($var)
    {
        return isset($this->attributes[$var]) ?? null;
    }

}