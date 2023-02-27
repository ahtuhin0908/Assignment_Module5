<?php
spl_autoload_register(function($fileName) {
    $path = str_replace('Assignment\\', "", $fileName);
    require_once "{$path}.php";
});