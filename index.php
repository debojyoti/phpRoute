<?php
$parts = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));
print_r($parts);