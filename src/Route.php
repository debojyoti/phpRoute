<?php

namespace Debojyoti;

class Route 
{
    public function __construct() {

    }

    public function getParts() {
        $arguments = ltrim($_SERVER['REQUEST_URI'],'/');
        $parts = explode('/', $arguments);
        return $parts;
    }
}