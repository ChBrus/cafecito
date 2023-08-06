<?php
    function getProjectURL($cadena) {
        $ruta_proyecto = str_replace("\\", '/', substr(__DIR__, strlen(realpath($_SERVER['DOCUMENT_ROOT'])))) . '/';

        return $ruta_proyecto;
    }

    function getAbsoluteProjectURL($cadena) {
        $ruta_proyecto = str_replace("\\", '/', substr(__DIR__, strlen(realpath($_SERVER['DOCUMENT_ROOT'])))) . '/';
        $ruta_proyecto = $_SERVER['DOCUMENT_ROOT'] . ($_SERVER['HTTP_HOST'] === 'localhost' ? substr($ruta_proyecto, 1) : '');

        return $ruta_proyecto;
    }
?>