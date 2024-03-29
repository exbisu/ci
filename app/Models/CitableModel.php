<?php

namespace App\Models;

use CodeIgniter\Model;

class CitableModel extends Model
{
    protected $table = 'citable';
    protected $useTimestamps = true;

    public function getInfo($slug = false){
        if($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug'=>$slug])->first();
    }
}