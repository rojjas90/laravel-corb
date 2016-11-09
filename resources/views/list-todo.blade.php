<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>List TODO</title>
  </head>
  <body>

    <div class="container">

      <div class="jumbotron">
              <h1>List TODO</h1>
            </div>

      <div class="starter-template">

        <ul class="list-group">

          @foreach ($list as $item)
              <li class="list-group-item"> <span class="badge">14</span> {{$item}} </li>
          @endforeach

        </ul>

      </div>


      <hr>
      <hr>
      <hr>

      <div class="bs-example" data-example-id="basic-forms">
           <form>
                <div class="form-group"> <label for="exampleInputEmail1">Email address</label> <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> </div>
                <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div>
                <div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile">
                     <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox"> <label> <input type="checkbox"> Check me out </label> </div> <button type="submit" class="btn btn-default">Submit</button> </form>
      </div>


    </div>

  </body>
</html>
