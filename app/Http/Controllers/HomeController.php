<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Convenio;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
	public function index()
	{
		$title = 'Enviar Arquivo';

		return view('home', compact('title'));
	}

	public function setArquivo(Request $request)
	{
		$rules = [
			'convenio' => 'mimes:xlsx,xls| required'
		];

		$messages = [
		    'required' => 'Selecione o arquivo para o envio.',
		    'mimes' => 'Tipo de aquivo não suportado.',
		];

		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {

			return redirect()->action('HomeController@index')
		    ->with('class', 'danger')
		    ->with('msg', 'Erro ao tentar enviar o arquivo!')
		    ->withErrors($validator)
		    ->withInput();

		}

		
	}
}