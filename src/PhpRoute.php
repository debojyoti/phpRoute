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
        #   Check if file exists in the given path
        if(file_exists($this->file_path)) {
            //  Check if the file is proper   
            if ($this->isRealFile()) {
                file_get_contents($this->file_path);
                return true;
            //  Check if a index.php file available in that path
            } else if (file_exists($this->file_path.'index.php')) {
                file_get_contents($this->file_path.'index.php');
                return true;
            }
        } else {
            return false;
        }
    }

    private function isRealFile() {
        $parts = (explode('.', $this->query_string));
        if (count($parts)>1) {
            return true;
        }
    }
}