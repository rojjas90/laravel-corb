<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Todo;

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
        return view('todo.create');
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

        // Todo::create([$request->name, .....])
        Todo::create($request->all());

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
