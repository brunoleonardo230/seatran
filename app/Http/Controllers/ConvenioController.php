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

		$convenio = Convenio::paginate(5);

		$municipio = Convenio::select('cod_municipio','nome_municipio')->get();

		$soma = Soma::orderBy('ano','asc')->get();


		return view('convenio', compact('title','convenio','municipio','soma'));
	}
}