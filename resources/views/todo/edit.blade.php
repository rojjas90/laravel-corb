@extends('shared._layout')
@section('content')
    <div class="bs-example" data-example-id="basic-forms">
         <form action="/todo/{{$todo->id}}" method="post">
           {{csrf_field()}}
           {{ method_field('PUT') }}
              <div class="form-group">
                      <label for="">name</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name" value={{$todo->name}}>
              </div>
              <div class="form-group">
                      <label for="">color</label>
                      <input type="text" class="form-control" id="" name="color" placeholder="color" value={{$todo->color}}>
              </div>
              <div class="form-group">
                      <label for="">priority</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority" value={{$todo->priority}}>
              </div>


               <button type="submit" class="btn btn-default">Submit</button>
             </form>
    </div>
@stop
