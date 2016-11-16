@extends('shared._layout')
@section('content')

  @if (session()->has('flash_msg'))


    <div class="alert alert-{{session()->get('flash_type')}} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      {{session()->get('flash_msg')}}
    </div>
  @endif

        <ul class="list-group">

          @foreach ($list as $item)
              <li class="list-group-item"> <span class="badge">14</span> {{$item->name}} -- {{$item->user->name}} </li>
          @endforeach

@stop
