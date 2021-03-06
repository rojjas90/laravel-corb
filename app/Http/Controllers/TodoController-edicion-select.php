<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Todo;
use App\Models\Project;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

$data = $request->all();
$data['user_id'] =1;
// return $data;
Todo::create($data);

        // return view('todo.index');

        // return $this->index(); //or return redirect('todo');

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
      $projects = Project::all();
      // return $projects;
      $datos = array();
array_push($datos, $todo,$projects);
// return compact('datos');
// return var_dump($datos[1]);
        return view('todo.edit',compact('datos'));



      // Todo::find($todo);
      // return $todo;
        return view('todo.edit',compact('todo'));
        // return view('todo.edit',);


                // // return $todo;
                //         $projects = Project::all();
                //
                // // return $projects;
                //
                //         $data = array();
                //         array_push($data, $todo,$projects);
                //
                // return $data;
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
      // return $todo;
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
