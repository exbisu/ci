<?php

namespace App\Controllers\admin;
//use untuk mengarakah file basecontoloer 
use App\Controllers\BaseController;
//nama class usahakan samakan dengan nama file 
class User extends BaseController
{
    public function index()
    {
        echo 'halloword';
        //bisa menggunakan retrun view('nama file') untuk di arahkan ke tempat view
    }
}
