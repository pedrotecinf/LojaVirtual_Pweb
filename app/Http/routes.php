<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/','homeController@index');
Route::get('/painelAdmin','painelAdmin@index');
Route::get('/signin', function () {
    return view('signin/index');
});
*/

Route::controller('painelAdmin','painelAdmin');
Route::controller('signin','signinController');

// não sei pq mas se não deixar essa rota por ultimo o laravel não encontra as
// demais rotas ::controller
Route::controller('','homeController');
