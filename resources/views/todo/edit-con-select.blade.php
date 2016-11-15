@extends('shared._layout')
@section('content')
    <div class="bs-example" data-example-id="basic-forms">
      <form action="/todo/{{$datos[0]->id}}" method="post">
        {{csrf_field()}}
        {{ method_field('PUT') }}
              <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name" value="{{$datos[0]->name}}">
              </div>
              <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" class="form-control" id="" name="description" placeholder="Description" value="{{$datos[0]->description}}">
              </div>
              <div class="form-group">
                      <label for="">Color</label>
                      <input type="text" class="form-control" id="" name="color" placeholder="color" value="{{$datos[0]->color}}">
              </div>
              <div class="form-group">
                      <label for="">Priority</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority" value="{{$datos[0]->priority}}">
              </div>
              <div class="form-group">
                      <label for="">Select a project</label>
                      <select class="form-control" name="project_id" id="id">
                          @foreach($datos[1] as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                          @endforeach
                      </select>
              </div>

              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop
