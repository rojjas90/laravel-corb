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
              <li class="list-group-item"> <span class="badge">14</span> {{$item->name}} -- {{$item->user->name}} </li>
              <form class="" action="/todo/{{$item->id}}" method="post">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                <button type="submit" name="button" class="btn btn-info">Eliminar</button>
              </form>
          @endforeach

@stop
