<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> 
<?php 
require 'NbrEquipage.php';      
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 $affiche = new NbrEquipage();
 $affiche->affiche();    
        ?>
    </body>
</html>