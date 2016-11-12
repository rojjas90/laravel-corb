@extends('shared._layout')
@section('content')
        <ul class="list-group">

          @foreach ($list as $item)
              <li class="list-group-item"> <span class="badge">14</span> {{$item->name}} </li>
          @endforeach

@stop
