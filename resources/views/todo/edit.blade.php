@extends('shared._layout')
@section('content')
    <div class="bs-example" data-example-id="basic-forms">
      <form action="/todo/{{$todo->id}}" method="post">
        {{csrf_field()}}
        {{ method_field('PUT') }}
              <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name" value="{{$todo->name}}">
              </div>
              <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" class="form-control" id="" name="description" placeholder="Description" value="{{$todo->description}}">
              </div>
              <div class="form-group">
                      <label for="">Color</label>
                      <input type="text" class="form-control" id="" name="color" placeholder="color" value="{{$todo->color}}">
              </div>
              <div class="form-group">
                      <label for="">Priority</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority" value="{{$todo->priority}}">
              </div>
              <div class="form-group">
                      <label for="">Project</label>
                      <input type="text" class="form-control" id="" placeholder="project" value="{{$todo->priority}}">
              </div>

              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop
