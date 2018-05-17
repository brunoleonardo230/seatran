<?php
Route::get('/', 'HomeController@index');
Route::post('/submit', 'HomeController@setArquivo');
Route::get('/convenio', 'ConvenioController@listar');