<?php
namespace App\Models;
use App\Models\Simple\CSVModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Player extends CSVModel{
    protected $origin = WRITEPATH . 'data/PlaceData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];

    //mock data : an array of records
    
}