<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About</title>
  </head>
  <body>
    <h2>Rojas</h2>

  </body>
</html>
<?php
 // var_dump($data)

// arreglo asociativo, helper
 var_dump($a)
 ?>

<?php foreach ($a as $value) {  ?>
    <li><?= $value ?></li>
  <?php } ?>

  <br><br>

  @foreach ($a as $item)
      <li>{{ $item }}</li>
    @endforeach
