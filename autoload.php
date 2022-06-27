<?php

spl_autoload_register(function (string $nameClass){
    $filePath = str_replace('Alura\\Bank', 'src', $nameClass);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= '.php';

    if(file_exists($filePath)) {
        require_once $filePath;
    }
});
