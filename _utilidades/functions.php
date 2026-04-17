<?php
function limpiar_texto($texto) {
    $buscar  = ['ñ', 'Ñ', ' '];
    $reemplazar = ['n', 'n', '-'];
    
    return strtolower(str_replace($buscar, $reemplazar, $texto));
}
?>