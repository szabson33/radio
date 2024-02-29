<?php
$volume = $_GET['volume'];
$comand = 'amixer -c 0 sset Digital '.strval($volume);
$output=null;
$retvalue=null;
// exec($comand,$output,$retvalue);

echo $volume;
?>