<?php
    function getSecondSlash($cadena, $host) {
        $ruta_proyecto = ($host === 'localhost' ? '/cafecito/' : '/');
    
        // Verificar si la URL está ambientado a mi local
        if (strpos($cadena, $ruta_proyecto . 'menu/') === 0) {
            return $ruta_proyecto;
        }
    
        // Si no coincide con ninguna de las condiciones anteriores, devolver "/"
        return $ruta_proyecto;
    }
?>