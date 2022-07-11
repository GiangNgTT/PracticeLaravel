<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mf extends Model
{
    use HasFactory;
    protected  $table= 'mfs';
    protected $filltable = ['mf_name'];
    public function cars(){
        return $this->hasMany(Car::class, 'mf_id', 'id');
    }
}
