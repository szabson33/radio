<?php
//Sprawdź która stacja z listy jest odtwarzana
$output=null;
$retvalue=null;
$command="mpc status |grep playing |cut -d# -f2 |cut -d/ -f1";
exec($command,$output,$retvalue);
$stacja=$output[0];
//echo $stacja;
switch ($stacja) {
    case "1":
    case "2":
    case "3":
    case "4":
        $output=null;
        $retvalue=null;
        $command=" mpc status |head -n 1 |cut -d ':' -f2- |cut -d '|' -f-1";
        exec($command,$output,$retvalue);
        $opis=$output[0];
        break;
    default:
    $output=null;
    $retvalue=null;
    $command="mpc status |head -n 1 |cut -d ':' -f2- |cut -d' ' -f2-";
    exec($command,$output,$retvalue);
    $opis=$output[0];
}
$opis="Utwór: ".substr($opis,0,60);
echo $opis;

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>
