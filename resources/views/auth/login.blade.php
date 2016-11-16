@extends('shared._layout')
@section('content')
@if (session()->has('logout_msg'))
  <div class="">
    Se cerró tu sesión correctamente
    <br>
    {{session()->get('logout_msg')}}
  </div>
@endif

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
@stop
