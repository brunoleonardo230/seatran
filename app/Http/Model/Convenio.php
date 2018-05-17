<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'tblconvenio';
    protected $primaryKey = 'idconvenio';
    public $timestamps = false;

    public static function setConvenio($arrayConvenio)
    {
        $convenio = new Convenio();
        $convenio->ano              = $arrayConvenio->c_ano;
        $convenio->resenha          = $arrayConvenio->c_resenha;
        $convenio->partes           = $arrayConvenio->c_partes;
        $convenio->valor_real       = $arrayConvenio->c_valor_real;
        $convenio->objeto           = $arrayConvenio->c_objeto;
        $convenio->cod_municipio    = $arrayConvenio->c_cod_municipio;
        $convenio->nome_municipio   = $arrayConvenio->c_nome_municipio;
        $convenio->save();
    }
}
