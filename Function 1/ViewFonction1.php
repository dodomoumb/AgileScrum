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

echo "<br>";
echo "<hr>";

$result = $table->SearchOccurence(100);


for ($i=0; $i < 99; $i++) { 
   echo "pour $i c\'est " . $result[$i] ." fois";
}
