<?php     namespace App\Controllers; 
 
    class Player extends \CodeIgniter\Controller   
    {         public function index()        
    {            // connect to the model     
        $places = new \App\Models\Player();          
        // retrieve all the records            
        $records = $places->findAll();          
        // JSON encode and return the result     
      return json_encode($records);    
      }  
      }
 