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
                      <input type="text" class="form-control" id="" name="color" placeholder="color" value="{{old('color')}}">
              </div>
              <div class="form-group">
                      <label for="">Priority</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority" value="{{old('priority')}}">
              </div>
              <div class="form-group">
                      <label for="">Select a project</label>
                      <select class="form-control" name="project_id" id="id">
                          @foreach($projects as $project)
                            <option value="{{$project->id}}"
                              @if (old('project_id') == $project->id)
                                selected="selected"
                              @endif
                              >{{$project->name}}</option>
                          @endforeach
                      </select>
              </div>
              <div class="form-group">
                      <label for="">Select a user</label>
                      {{-- @foreach($users as $user)
                        <div class="checkbox">
                              <label>
                                <input type="checkbox" name="collaborators[]" value="{{$user->id}}"> {{$user->name}}
                              </label>
                        </div>
                      @endforeach --}}

{{-- {{dd(old('collaborators'))}} --}}

                      <select class="form-control" name="collaborators[]" multiple size="5">
                          @foreach($users as $user)
                            <option value="{{$user->id}}"
                              @if (!is_null(old('collaborators')))
                                @if (in_array($user->id,old('collaborators')))
                                  selected="selected"
                                @endif
                              @endif

{{-- {{collect(old('collaborators'))->contains($user->id) ? "selected" : ""}} --}}

                              >{{$user->name}}</option>
                          @endforeach
                      </select>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
  @stop
