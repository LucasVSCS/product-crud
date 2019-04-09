<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //Desativando as timestamps do DB
    protected $fillable = ['name', 'description'];  //Determinando os campos que serão inseridos pelo usuário no DB
}
