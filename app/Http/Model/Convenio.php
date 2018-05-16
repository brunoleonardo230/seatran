<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
   protected $table = 'tblconvenio';
   protected $primaryKey = 'idconvenio';
   public $timestamps = false;

    protected $fillable = [
     'ano',
     'resenha',
     'partes',
     'valor_real',
     'objeto',
     'cod_municipio',
     'nome_municipio'
    ];
}
