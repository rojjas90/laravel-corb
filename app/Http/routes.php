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
Route::get('/todo/{todo}','TodoController@show')->where('id','[0-9]+');
Route::get('/todo/{todo}/edit','TodoController@edit')->where('id','[0-9]+');
Route::put('/todo/{todo}','TodoController@update')->where('id','[0-9]+');
Route::delete('/todo/{todo}','TodoController@destroy')->where('id','[0-9]+');

// Ligado de rutas con los modelos
Route::model('todo', 'App\Models\Todo');

// //parametros opcionales, se usa ? p.e.
// Route::get('/todo/{id?}','TodoController@show');

// Routes for project controller

Route::get('/project','ProjectController@index');
Route::get('/project/create','ProjectController@create');
Route::post('/project','ProjectController@store');
Route::get('/project/{project}','ProjectController@show')->where('id','[0-9]+');
Route::get('/project/{project}/edit','ProjectController@edit')->where('id','[0-9]+');
Route::put('/project/{project}','ProjectController@update')->where('id','[0-9]+');
Route::delete('/project/{project}','ProjectController@destroy')->where('id','[0-9]+');


// Ligado de rutas con los modelos
Route::model('project','\App\Models\Project');

//Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Register routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
