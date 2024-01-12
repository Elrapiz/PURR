<?php

declare(strict_types = 1);

spl_autoload_register(function ($classname) {

    $parts = explode('\\', $classname);
    $class = array_pop($parts);
    $parts = strtolower(implode(DS, $parts));

    $path = '..' . DS . $parts . DS . $class . '.php';

    if (file_exists($path)) {
        require_once realpath($path);
    } else {
        // maybe do this only in debug or development mode? dunno :|
        die("Path: {$path} does not exist");
    }

});