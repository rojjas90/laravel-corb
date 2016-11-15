@extends('shared._layout')
@section('content')
    <div class="bs-example" data-example-id="basic-forms">
         <form action="/todo" method="post">
           {{csrf_field()}}
              <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name">
              </div>
              <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" class="form-control" id="" name="description" placeholder="Description">
              </div>
              <div class="form-group">
                      <label for="">Color</label>
                      <input type="text" class="form-control" id="" name="color" placeholder="color">
              </div>
              <div class="form-group">
                      <label for="">Priority</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority">
              </div>
              <div class="form-group">
                      <label for="">Select a project</label>
                      <select class="form-control" name="project_id" id="id">
                          @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                          @endforeach
                      </select>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
  @stop
