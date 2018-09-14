<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TableauMin
 *
 * @author Administrateur
 */
class NbrEquipage {

    
    
    public function affiche() {
        $myBoats = array(
            array(//from   w  w w .ja v a 2  s. co m
             "boat"=>"Manureva",
             "nbrEquipage"=>3,
             "nbrPassager"=> 4
         ),
            array(
             "boat"=>"Sirius",
             "nbrEquipage"=>4,
             "nbrPassager"=> 6
         ),
            array(
             "boat"=>"Surcouf",
             "nbrEquipage"=>8,
             "nbrPassager"=> 15
         ),
          );
  
            //$boatNum = 0;
  
            foreach ($myBoats as $boat) {
  
              //$boatNum++;
              //echo"Boat #$boatNum:\n";
              //foreach ($boat as $key => $value) {
                //echo"$key : $value \n<br>" ;
                if($boat["nbrPassager"]>0 && $boat["nbrPassager"] >= 10){
                    
                    echo "Le".$boat["boat"]." peut embarquer ".$boat["nbrPassager"]." passagers" ;
                    
                }
              //}
            }
  
   
    }
	
}