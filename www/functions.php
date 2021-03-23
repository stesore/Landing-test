<?php
declare(strict_types=1); // modalità strict, controllo rigoroso dei tipi di dati

ini_set('error_log','../logs/php-errors.log');
error_reporting(E_ERROR | E_WARNING);


function print_multistep_forms(string $formname, string $basepath="../"): ?string
{
    $formname_filtered = filter_var($formname,FILTER_SANITIZE_STRING);
    $filename = "$basepath$formname_filtered.json";

    echo $filename;

    if(!file_exists($filename))
        return null;


}