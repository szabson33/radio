<?php
$volume = $_GET['volume'];
$comand = 'amixer -c 0 sset Digital '.strval($volume);
$output=null;
$retvalue=null;
exec($comand,$output,$retvalue);

echo $volume;

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>