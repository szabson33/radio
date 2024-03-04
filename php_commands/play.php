<?php
$number = $_GET['v'];
$comand ='mpc play '. $number ;
$output=null;
$retvalue=null;
exec($comand,$output,$retvalue);


echo "station set to ".$number;

?>