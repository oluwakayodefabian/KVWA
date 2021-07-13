<?php

spl_autoload_register(function ($filename) {
    $filepath = "classes/";
    $extension = ".php";
    if (file_exists($filepath . $filename . $extension)) {
        require_once($filepath . $filename . $extension);
    } else {
        echo $filepath . $filename . $extension . "does not exists";
    }
});
