<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Todo;
use App\Models\Project;
use Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return Auth::user();
      // dd( Auth::check());

        // // $list = ['Correr por la tarde','Leer en sabado','Jugar match horda 3.0','Comer hasta reventar','Dormir lo mas que se pueda'];
        // $list = DB::table('todo')->get();
        $list = Todo::all()->load('user');
        // return $list;
          // return view('welcome');
          return view('todo.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $projects = Project::all();
// return $projects;
        return view('todo.create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // return $request;
        // // return $request->priority;
        // $data = new Todo;
        // $data->name = $request->name;
        // $data->color = $request->color;
        // $data->priority = $request->priority;
        //
        // // return $data;
        //
        // $data->save();

// return $request;
        // Todo::create([$request->name, .....])

$messages = [
  // 'max' => 'Máximo 10'
  'name.required' => 'El campo name es necesario',
  'priority.required' => 'El campo priority es necesario'

  // o
  // 'required' => 'Los campos son necesarios'
];

// se valida el formulario
$this->validate($request, [
        'name' => 'required|alpha_num|max:10|unique:todos', // por default toma el del name si no se defina el campo de la tabla
        'priority' => 'required'
    ],$messages);



$data = $request->all();
$data['user_id'] =Auth::user()->id;
// return $data;
Todo::create($data);

        // return view('todo.index');


        // return $this->index(); //or return redirect('todo');

// dd(session()->all());

// se define el mensaje flash de que se creo
// session()->flash('logout_msg','Sesion terminada');
session()->flash("flash_msg","Se creó la tarea data['name']");
session()->flash('flash_type','info');



// se redifije a la lista de todo's
        return redirect('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $todo
     * @return \Illuminate\Http\Response
     */
    // public function show(Todo $todo)
    public function show(Todo $todo)
    {
      // DB::table('todo')->where('id',$todo)->first();
      //   return view('todo.show',compact('id'));
      // $todo = Todo::where('id',$todo)->first();

      // $todo = Todo::where('id',$todo)->get(); // recupera un arreglo con un solo objeto, hace falta recuperar el objeto del arreglo
      // Se obtienen datos con Eloquent
      // $todo = Todo::find($todo);
      // return $todo;
        return view('todo.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
      $project = Project::find($todo->project_id);


      // return $project;
      // Todo::find($todo);
      // return $todo;
        return view('todo.edit',compact('todo'));
        // return view('todo.edit',);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Todo $todo)
    {
      return $todo;
      // return $request;
      return Todo::create($request->all());
        // $todo->name = $request->name;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($todo)
    {
        //
    }
}
