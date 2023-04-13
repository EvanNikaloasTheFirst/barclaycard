<?php
function autoload($className) {
//    load a given class name
//    only loads required 'require files'
    $fileName = str_replace('\\', '/', $className) . '.php';
    $file = '../' . $fileName;

    require $file;
}
spl_autoload_register('autoload');