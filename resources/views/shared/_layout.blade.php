<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Layout</title>
  </head>
  <body>
    <header>
      @if (Auth::check())
        Bienvenido {{Auth::user()->name}} | <a href="/auth/logout">Salir</a>
      @endif
    </header>
    <div class="container">

          <div class="jumbotron">
            <h1>Todo</h1>
          </div>

          <div class="row marketing">


            <div class="conteiner">
              <div class="col-lg-12">
                @yield('content')
              </div>
            </div>

          </div>

          <!-- <footer class="footer">
            <p>© 2016 Company, Inc.</p>
          </footer> -->

          <footer style="margin-top: 50px;">
                            <p class="pull-right"><a href="#">Back to top</a></p>
                            <p>© 2016 Company, Inc. · <!-- <a href="#">Privacy</a> · <a href="#">Terms</a> --></p>
                          </footer>

                          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                          <!-- Latest compiled and minified JavaScript -->
                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
@yield('scripts')
</script>


        </div>
    </body>
</html>
