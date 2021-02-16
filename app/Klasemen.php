<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klasemen extends Model
{
     protected $table = 'klasemen';
     protected $fillable = ['id','poin','nama_team','created_at','updated_at'];
}
