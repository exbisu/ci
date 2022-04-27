<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
     $data = [
         'title' => 'Home || TravelP'
     ];
        return view('Pages/Home',$data);
    }
        public function AboutUs()
    {
     $data = [
         'title' => 'About Us || TravelP'
     ];
        return view('Pages/AboutUs',$data);
    }
        public function Contact()
    {
     $data = [
         'title' => 'Contact || TravelP'
     ];
        return view('Pages/Contact',$data);
    }
        public function Paket()
    {
     $data = [
         'title' => 'Paket || TravelP'
     ];
        return view('Pages/Paket',$data);
    }

}