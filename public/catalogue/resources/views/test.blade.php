<!doctype html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>Mauvaise façon</title>
  </head>
  <body>
    <p>les cats sont : </p>
 <?php 
  
    echo $categories['0']->name;
 ?>

   
@foreach($categories as $cat)
      <li><?=   $cat->name; ?></li> 
    @endforeach;

  </body>
</html>