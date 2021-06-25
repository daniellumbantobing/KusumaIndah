<?php

namespace App;
use App\Kategori;

use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    protected $table = 'panduan';

    public function kategori(){ 
        return $this->hasMany('App\Kategori'); 
    }

}
