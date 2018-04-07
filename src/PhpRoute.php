<?php

namespace Debojyoti;

class PhpRoute 
{
    private $host;
    private $query_string;
    private $url;
    private $file_path;
    public function __construct() {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->query_string = $_SERVER['REQUEST_URI'];
        $this->url = $this->host.$this->query_string;
        $this->file_path = $_SERVER['DOCUMENT_ROOT'].$this->query_string;
    }

    public function getParts() {
        $arguments = ltrim($this->query_string,'/');
        $parts = explode('/', $arguments);
        return $parts;
    }

    public function redirectProper() {
        if(file_exists($this->file_path)) {
            file_get_contents($this->file_path);
        } else {
            return false;
        }
    }
}