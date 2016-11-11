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

Route::get('/', function () {

  $list = ['Correr por la tarde','Leer en sabado','Jugar match horda 3.0','Comer hasta reventar','Dormir lo mas que se pueda'];
    // return view('welcome');
    return view('list-todo',compact('list'));
});

// Route::get('about', function () {
//     return view('about');
//     //return view('admin.help');
// });
//
// Route::get('{variable}', function ($variable) {
//     // return view('about');
//     return $variable;
//
// })->where('variable','[0-9]+');
//
//
Route::get('{variable}', 'TestController@variable')->where('variable','[0-9]+');


Route::get('about', function () {
  $a  = [1,2,3];
    // return view('about',['data' => $a]);

    // // arreglo asociativo
    // return view('about',compact('a'));

    //  uso de helper with
    return view('about')->with('a', $a);
});

// Routes for todo controller

Route::get('/todo','TodoController@index');
Route::get('/todo/create','TodoController@create');
Route::post('/todo','TodoController@store');
Route::get('/todo/{id}','TodoController@show')->where('id','[0-9]+');
Route::get('/todo/{id}/edit','TodoController@edit')->where('id','[0-9]+');
Route::put('/todo/{id}','TodoController@update')->where('id','[0-9]+');
Route::delete('/todo/{id}','TodoController@destroy')->where('id','[0-9]+');

// Ligado de rutas con los modelos
Route::model('id', 'App\Models\Todo');

// //parametros opcionales, se usa ? p.e.
// Route::get('/todo/{id?}','TodoController@show');

// Routes for project controller

Route::get('/project','ProjectController@index');
Route::get('/project/create','ProjectController@create');
Route::post('/project','ProjectController@store');
Route::get('/project/{id}','ProjectController@show')->where('id','[0-9]+');
Route::get('/project/{id}/edit','ProjectController@edit')->where('id','[0-9]+');
Route::put('/project/{id}','ProjectController@update')->where('id','[0-9]+');
Route::delete('/project/{id}','ProjectController@destroy')->where('id','[0-9]+');


// Ligado de rutas con los modelos
Route::model('id','\App\Models\Project');
