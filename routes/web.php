<?php
Route::get('/', 'HomeController@index');
Route::post('/submit', 'HomeController@setArquivo');
