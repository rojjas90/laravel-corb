@extends('shared._layout')
@section('content')
<h1>Esta es la tarea: {{$todo->name}}</h1>
<h3>Creado por: <small>{{$todo->user->name}}</small> </h3>
<h3>Proyecto: <small>{{$todo->project->name}}</small> </h3>
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

<h3>Usuarios asignados</h3>
          <ul>
            @foreach ($todo->collaborators as $collaborator)
              <li>
                {{$collaborator->name}} | {{$collaborator->pivot->assigned_at}}
              </li>
            @endforeach
          </ul>

<a class="btn btn-info" href="/todo/{{$todo->id}}/edit">Editar</a>
          {{-- <button type="button" name="button" class="btn btn-info">Editar</button> --}}
          @can('delete-todo',$todo)
          <button type="button" name="button" class="btn btn-danger">Eliminar</button>
        @endcan

        <a class="btn btn-default" href="/todo">Volver</a>
</div>

@stop
