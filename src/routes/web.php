<?php
Route::name('bageur.')->group(function () {
	Route::group(['prefix' => 'bageur/v1'], function () {
		Route::get('indonesia/provinsi', 'bageur\auth\IndonesiaController@provinsi')->middleware('bgr.verify');
		Route::get('indonesia/provinsi/{id}', 'bageur\auth\IndonesiaController@provinsi_detail')->middleware('bgr.verify');
	});
});