<?php
$comand = 'mpc stop';
$output=null;
$retvalue=null;
exec($comand,$output,$retvalue);
echo "stop!";
?>