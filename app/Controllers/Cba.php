<?php     namespace App\Controllers; 
 
    class Cba extends BaseController  
    {         public function index() 
    {  
         // connect to the model
         $places = new \App\Models\Player();
         // retrieve all the records
      $records = $places->findAll(); 
        // get a template parser
     $parser = \Config\Services::parser(); 
     // tell it about the substitions
       return $parser->setData(['records' => $records])     
               // and have it render the template with those  
            ->render('playerslist'); 
 
        } 
          public function showme($id) 
          {  
              // connect to the model
            $places = new \App\Models\Player();     
      // retrieve all the records  
             $record = $places->find($id); 
             // get a template parser
             $parser = \Config\Services::parser(); 
             // tell it about the substitions 
             return $parser->setData($record) 
                     // and have it render the template with those 
               ->render('oneplayer');
              } 
        }