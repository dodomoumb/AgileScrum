<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/09/2018
 * Time: 11:37
 */

class Table1{
    private $table;

    /**
     * Table constructor.
     * @param $table
     */
    public function __construct()
    {
        $this->table =  Array();
    }


    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $table
     * @return Table
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function ConstructTableRandom($lengthTable, $maxRandom){

           // Fill Table
        for ($i= 1; $i< $lengthTable; $i++)
        {
  
            $this->table[$i] = rand(0, $maxRandom);
           
        }
    //print_r ( $this->table);
 
    }

    // public  function SearchOccurence($table){
        public  function SearchOccurence($maxRandom){
         $tableTemp = array();

         for($i = 0; $i< $maxRandom; $i++){
            $tableTemp[$i] =  0;
         }
        
       //  print_r ($this->table);

       //  for ($i = 1; $i< count($this->table); $i++){
           for ($i = 0; $i< $maxRandom +1; $i++){
          
             // occurence par default du 1er élément
            // $tableTemp[$this->table[$i]] =  1;
            // $tableTemp[$i] =  0;
             for ($j = 1; $j <count($this->table); $j++){ 
                 if ($this->table[$j] == $i){
                   
                    $tableTemp[$i] +=  1;
                 }

             }
         
         }
       //   print_r ( $tableTemp);
         return $tableTemp;
     }

}