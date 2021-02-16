<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    protected $table = 'pertandingan';
    protected $fillable = ['id','home_team','away_team','score','created_at','updated_at'];
}
