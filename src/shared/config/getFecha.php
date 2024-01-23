<?php
function fechaEs($fecha)
{
    $fecha = substr($fecha, 0, 10);
    $mes = date('F', strtotime($fecha));
    $anio = date('Y', strtotime($fecha));
    $meses_ES = array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    return $nombreMes . " - " . $anio;
}
