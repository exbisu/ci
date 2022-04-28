<?php

namespace App\Controllers;

use App\Models\CitableModel;

class Table extends BaseController
{
    protected $citable;
    public function __construct()
    {

    $this->citable = new CitableModel();

    }
  
    public function index()

    {
        // $table = $this->citable->findAll();
     $data = [
        
         'title' => 'Table || TravelP',
         'table'=> $this->citable->getInfo()
     ];
    //    $citable = new CitableModel();
        // $test = $this->citable->findAll();
        // dd($test);
        return view('Pages/Table',$data);
    }

    public function detail($slug){

             $data = [
         'title' => 'INFO || TravelP',
         'info' => $this->citable->getInfo($slug)
     ];
        return view('Pages/detail',$data);

    }
    public function add(){

             $data = [
         'title' => 'ADD || TravelP'
     ];
        return view('Pages/add',$data);

    }

    
}