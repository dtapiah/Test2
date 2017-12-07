<?php

Route::get('calculadora', function(){
	echo 'asdasdad!';
});

Route::get('suma/{a}/{b}', 'Danilo\Prueba\PruebaController@suma');
Route::get('resta/{a}/{b}', 'Danilo\Prueba\PruebaController@resta');