<?php
$comand = 'mpc stop';
$output=null;
$retvalue=null;
exec($comand,$output,$retvalue);
echo "stop!";

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>