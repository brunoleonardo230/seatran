<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Convenio;
use App\Http\Model\Soma;


class ConvenioController extends Controller
{
	public function listar()
	{

		$title = 'Consulta de Municípios e Convênios';

		$convenio = Convenio::get();
		$convenio = json_decode($convenio);

		//dd($convenio);

		$municipio = Convenio::select('nome_municipio','cod_municipio')
						->selectRaw('count(*) as cnt')
						->groupBy('nome_municipio','cod_municipio')
						->orderBy('nome_municipio','ASC')
						->get();

		$soma = Soma::get();


		return view('convenio', compact('title','convenio','municipio','soma'));
	}
}