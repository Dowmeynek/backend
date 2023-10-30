<?php

namespace App\Controllers;

class Home extends BaseController
{ 
    private $destination;
    public function __construct()
    {
        $this->destination = new \App\Models\DestinationModel();
    }
   
    public function index()
    {
    $data =[
        'destinations' => $this->destination->findAll()
      ];
      return view('index', $data);
    }
    public function service() {
        return view('navContent/services');

    }
        
    
}
