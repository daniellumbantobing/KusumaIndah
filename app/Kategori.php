<?php

namespace App;
use App\Panduan;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    public function panduan(){ 
        return $this->belongsTo('App\Panduan'); 
    }
}
