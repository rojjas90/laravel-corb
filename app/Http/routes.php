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
    // return view('welcome');
    $lista = ['Correr por la tarde','Leer en sabado','Jugar horda 3.0','Caminar hasta la casa'];

    return view('lista')->with('lista',$lista); 

});

// Route::get('about', function () {
//     return view('about');
//     //return view('admin.help');
// });

Route::get('about', function () {
  $a  = [1,2,3];
    // return view('about',['data' => $a]);

    // // arreglo asociativo
    // return view('about',compact('a'));

    //  uso de helper with
    return view('about')->with('a', $a);
});

Route::get('{id}', function (){

});
