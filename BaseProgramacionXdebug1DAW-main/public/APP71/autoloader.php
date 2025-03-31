<?php

function autocargador($clase) {
    $file = __DIR__ . '/clases/' . $clase . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("No se pudo cargar la clase: $clase");
    }
}

spl_autoload_register('autocargador');
