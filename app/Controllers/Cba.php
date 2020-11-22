<?php

namespace App\Controllers;

class Cba extends BaseController {

    public function index() {
        // connect to the model
        $player = new \App\Models\Player();
        // retrieve all the records
        $records = $player->findAll();
        
        $parser = \Config\Services::parser();
        // tell it about the substitions
        /* return $parser->setData(['records' => $records])     
          // and have it render the template with those
          ->render('placeslist'); 
         * 
         */
        
        $table = new \CodeIgniter\View\Table();
        $headings = $player->fields;
        $displayHeadings = array_slice($headings, 1, 2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        foreach ($records as $record) {
            $nameLink = anchor("cba/showme/$record->id", $record->name);
            $table->addRow($nameLink, $record->city,
                    '<img src="/image/'.$record->image.'">'
                    
                    );
            
        }

        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template);

        $fields = [
            'title' => 'CBA ALL STAR',
            'heading' => 'CBA ALL STAR',
            'footer' => 'Jianwei Yuan'
        ];

        // get a template parser
        
        return $parser->setData($fields)
                        ->render('templates\top') .
                $table->generate() .
                        $parser->setData($fields)
                        ->render('templates\bottom');
    }

    public function showme($id) {
        // connect to the model
        $player = new \App\Models\Player();
        // retrieve all the records  
        $record = $player->find($id);
        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions 
        /*return $parser->setData($record)
                        // and have it render the template with those 
                        ->render('oneplace');
         * 
         */
          $table = new \CodeIgniter\View\Table();
              $headings = $player->fields;
              $table->addRow($headings[0],$record['id'])
                      ->addRow($headings[1],$record['name'])
                      ->addRow($headings[2],$record['city'])
                      ->addRow($headings[3],$record['team'])
                      ->addRow($headings[4],"<img src=\"/image/".$record['image']."\"/>")
                      ->addRow($headings[5],$record['position'])
                      ->addRow($headings[6],$record['characteristic'])
                      ->addRow($headings[6],$record['stature']);
                      
           $template = [
        'table_open' => '<table cellpadding="5px">',
        'cell_start' => '<td style="border: 1px solid #dddddd;">',
        'row_alt_start' => '<tr style="background-color:#dddddd">',
     ];   
              $table->setTemplate($template);
              
                  $fields = [
         'title' => 'CBA ALL STAR',
         'heading' => 'CBA ALL STAR',
         'footer' => 'Jianwei Yuan'
         ];
      // tell it about the substitions
  /* return $parser->setData($record)
      // and have it render the template with those
      ->render('oneplace');*/
return $parser->setData($fields)
               ->render('templates\top') .
       $table->generate() .
        $parser->setData($fields)
               ->render('templates\bottom');
    }

}
