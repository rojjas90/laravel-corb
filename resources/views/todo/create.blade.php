<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Crear todos</title>
  </head>
  <body>
<div class="container">
    <div class="bs-example" data-example-id="basic-forms">
         <form action="/todo" method="post">
           {{csrf_field()}}
              <div class="form-group">
                      <label for="">Email address</label>
                      <input type="text" class="form-control" id="" name="name" placeholder="name">
              </div>
              <div class="form-group">
                      <label for="">Password</label>
                      <input type="text" class="form-control" id="" name="color" placeholder="color">
              </div>
              <div class="form-group">
                      <label for="">Password</label>
                      <input type="text" class="form-control" id="" name="priority" placeholder="priority">
              </div>


               <button type="submit" class="btn btn-default">Submit</button>
             </form>
    </div>
    </div>
  </body>
</html>
