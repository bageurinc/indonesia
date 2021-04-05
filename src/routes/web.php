<?php
Route::name('bageur.')->group(function () {
	Route::group(['prefix' => 'bageur/v1'], function () {
		Route::get('indonesia/provinsi', 'bageur\indonesia\IndonesiaController@provinsi');
		Route::get('indonesia/provinsi/{id}', 'bageur\indonesia\IndonesiaController@provinsi_detail');
	});
});