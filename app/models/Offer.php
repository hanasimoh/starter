<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable =['name', 'price', 'details','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];




}
