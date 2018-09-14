<?php
require_once './Table1.php';
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/09/2018
 * Time: 12:19
 */


$table = new Table1();
$table->ConstructTableRandom(30, 100);


$result = $table->SearchOccurence(100);


for ($i=0; $i < 99; $i++) { 
   echo " la valeur " . $i.  " est "  . $result[$i] ." fois";
   echo"<br>";
}
