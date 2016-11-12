@extends('shared._layout')
@section('content')
    <div class="bs-example" data-example-id="basic-forms">
         <form action="/todo" method="post">
           {{csrf_field()}}
              <div class="form-group">
                      <label for="">name</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name">
              </div>
              <div class="form-group">
                      <label for="">color</label>
                      <input type="text" class="form-control" id="" name="color" placeholder="color">
              </div>
              <div class="form-group">
                      <label for="">priority</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority">
              </div>


               <button type="submit" class="btn btn-default">Submit</button>
             </form>
    </div>
  @stop
