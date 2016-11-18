<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Todo;
use App\Models\User;
use App\Models\Project;
use Auth;
use App\Http\Requests\StoreTaskRequest;

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

// // se coloca un valor en la variable de session
// session()->put('parametro','valor');

        // // $list = ['Correr por la tarde','Leer en sabado','Jugar match horda 3.0','Comer hasta reventar','Dormir lo mas que se pueda'];
        // $list = DB::table('todo')->get();

        // obtener todas las tareas con Eloquent
        $list = Todo::all()->load('user','collaborators'); //llama a las relaciones
        // $list = Todo::all()->load('user','collaborators','projects'); //llama a las relaciones
//
// foreach ($$list as $todo) {
//   if ($todo->user_id == Auth::user()->id || in_array(Auth::user()->id,$list->collaborators)) {
//     $todo['owner'] = true;
//   }
// }

foreach ($list as $todo) {
  $todo->owner = false;
  if ($todo->user_id == Auth::user()->id) {
    $todo->owner = true;
  }
}

// dd($list);

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
      // $collaborators = Todo::all();

      $projects = Project::all();
      $users = User::all();

// $todo->load('user','collaborators');

// return $projects;
        return view('todo.create',compact('projects','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
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

// $messages = [
//   // 'max' => 'Máximo 10'
//   'name.required' => 'El campo name es necesario',
//   'priority.required' => 'El campo priority es necesario'
//
//   // o
//   // 'required' => 'Los campos son necesarios'
// ];

// // se valida el formulario
// $this->validate($request, [
//         'name' => 'required|alpha_num|max:10|unique:todos', // por default toma el del name si no se defina el campo de la tabla
//         'priority' => 'required'
//     ],$messages);


$data = $request->all();

// dd($data);


// $data['user_id'] =Auth::user()->id;
// return $data;

//asignando el creador pero como parte de la relacion
$todo = Todo::create($data);


/***************************************/
// //attach guarda los valores en las relaciones (tablas intermedias)
//
// //asignando al creador como colaborador
// $todo->user()->attach(Auth::user()->id);
//
// $todo->collaborators()->attach(Auth::user()->id,['assigned_at'=>'2016-11-16','allow'=>2]);
// // o
// //guarda la relacion
// $todo->collaborators()->saveMany(Auth::user());

/***************************************/

$todo->collaborators()->attach($data['collaborators']);

// //asignando a un grupo de colaboradores
// $todo->collaborators()->attach($request->collaborators);
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

      $todo->load('user','collaborators');
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

      // // valida si se puede elimiar
      // if (Gate::denies('delete-todo', $todo)) {
      //       // abort(403);
      //       // o
      //       session()->flash('flash_msg','Denegado');
      //       session()->flash('flash_type','danger');
      //       return back();
      //   }

        // o

// dd(session());
        if (Auth::user()->cannot('delete-todo',$todo)) {
          session()->flash('flash_msg','Denegado');
          session()->flash('flash_type','danger');
          // return back();
          // o
          //mada vista de error que se encuentra en la carpeta view/errors
          Abort(403,'No permitido');
        }

        $todo->delete();

      // se redifije a la lista de todo's
              // return redirect('todo');
              return back();
    }
}
