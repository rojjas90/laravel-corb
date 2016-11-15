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
              @forelse ($projects as $project)
                  <li class="list-group-item"> <span class="badge">14</span> {{$project->name}}
                    <ul>
                    @forelse ($project->todos as $todo)
                      <li class="list-group-item">{{$todo->name}} | {{$todo->user->name}}</li>
                    @empty
                      No hay tareas
                    @endforelse
                    </ul>
                  </li>
              @empty
                  <p>No hay projectos</p>
              @endforelse
        </ul>

      </div>


    </div>

  </body>
</html>
