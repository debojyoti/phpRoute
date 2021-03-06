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
        $arguments = rtrim($arguments, '/');
        $parts = explode('/', $arguments);
        if(count($parts) == 1 && $parts[0] == '') {
            return [];
        }
        return $parts;
    }
}