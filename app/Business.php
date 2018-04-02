<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
     public $table = "businesses";
    public $fillable = ['entrepreneur_name', 'director_name'];
}
