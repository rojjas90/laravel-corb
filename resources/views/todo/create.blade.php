@extends('shared._layout')
@section('content')
@if (count($errors->all()))
  <div class="danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach

    </ul>
  </div>
@endif


    <div class="bs-example" data-example-id="basic-forms">
         <form action="/todo" method="post">
           {{csrf_field()}}
              <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name" value="{{old('name')}}">
              </div>
              <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" class="form-control" id="" name="description" placeholder="Description" value="{{old('description')}}">
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
