<?php
$number = $_GET['v'];
$comand ='mpc play '. $number ;
$output=null;
$retvalue=null;
exec($comand,$output,$retvalue);


echo "station set to ".$number;


header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>