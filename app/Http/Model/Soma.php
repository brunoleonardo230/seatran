<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Soma extends Model
{
   protected $table = 'tblsoma';
   protected $primaryKey = 'idsoma';
   public $timestamps = false;

    protected $fillable = [
     'municipio',
     'ano',
     'quantidade',
     'total'
    ];
}
