@extends('shared._layout')
@section('content')

  @if (session()->has('flash_msg'))


    <div class="alert alert-{{session()->get('flash_type')}} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      {{session()->get('flash_msg')}}
    </div>
  @endif

  {{-- // se recupera el valor en la variable de session --}}
  {{-- {{session()->get('parametro')}} --}}


        <ul class="list-group">

          @foreach ($list as $item)
              <li class="list-group-item">
                {{-- <span class="badge">priority: {{$item->priority}}</span> --}}
                <span class="label label-default">priority: {{$item->priority}}</span>
                @if ($item->owner)
                    <span class="glyphicon glyphicon-user"></span>
                @endif
                {{-- <span>Creado por: {{$item->user->name}}</span> --}}
                <a href="/todo/{{$item->id}}">{{$item->name}}</a> -- {{$item->user->name}} -- {{$item->created_at->diffForHumans()}}

                {{-- <a class="btn btn-success" href="/todo/{{$item->id}}">Ver</a> --}}
                <form class="list-inline" action="/todo/{{$item->id}}" method="post">
                  {{method_field('DELETE')}}
                  {{csrf_field()}}
                  <button type="submit" name="button" class="btn btn-info">Eliminar</button>
                </form>

              </li>
          @endforeach
        </ul>
{!! $list->render() !!}
@stop
