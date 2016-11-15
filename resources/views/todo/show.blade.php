@extends('shared._layout')
@section('content')
<h1>Detalles de: {{$todo->name}}</h1>
<br>
<div class="bs-example" data-example-id="basic-forms">
           <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" id="" name="name" placeholder="name" value="{{$todo->name}}">
          </div>
          <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" class="form-control" id="" name="description" placeholder="Description" value="{{$todo->description}}">
          </div>
          <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" class="form-control" id="" name="name" placeholder="name" value="{{$todo->name}}">
         </div>
          <div class="form-group">
                  <label for="">Color</label>
                  <input type="text" class="form-control" id="" name="color" placeholder="color" value="{{$todo->color}}">
          </div>
          <div class="form-group">
                  <label for="">Priority</label>
                  <input type="text" class="form-control" id="" name="priority" placeholder="priority" value="{{$todo->priority}}">
          </div>
</div>

@stop
