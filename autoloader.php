<?php
spl_autoload_register(function ($class) {
    $file =  __DIR__ . '/classes/' . $class . '.php';
    if(file_exists($file))
        require $file;
});
spl_autoload_register(function ($class) {
    $file =  __DIR__ . '/exception/' . $class . '.php';
    if(file_exists($file))
        require $file;
});