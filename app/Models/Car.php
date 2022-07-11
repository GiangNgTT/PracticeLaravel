<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected  $table= 'cars';
    protected $filltable = [ 'image','description','model','produced_on', 'md_id' ];
    public function mfs(){
        return $this->belongsTo(Mf::class, 'mf_id', 'id');
    }
}