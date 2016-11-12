@extends('shared._layout')
@section('content')
<h1>Detalles de: {{$todo->name}}</h1>
<br>
<div class="bs-example" data-example-id="basic-forms">
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
</div>

@stop
