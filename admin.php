
<html lang="en">
  <head>
      <?php
include "multilanguage.php";
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php echo $lang['title']; ?></title>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    <!-- Firestore -->
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>
    
    <script src="app.js"></script>
  </head>
  <body>
      
      <div class="container">
    <h1><?php echo $lang['heading1']; ?></h1>
        <input type="text" id="nombre" placeholder="nombre" class="form-control my-3">
        <input type="text" id="apellido" placeholder="apellido" class="form-control my-3">
        <input type="text" id="fecha" placeholder="fecha" class="form-control my-3">
        <button class="btn btn-info" id="boton" onclick="guardar()">Guardar</button>
        
        <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Born</th>
            <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>

    </tr>
  </thead>
  <tbody id="tabla">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
    </div>
      
      <div>
          <a class="btn btn-primary pull-right" href="admin.php?lang=en"><?php echo $lang['lang_en']?></a>
          <a class="btn btn-primary pull-right" href="admin.php?lang=es"><?php echo $lang['lang_es']?></a>
      </div>
  
    
  </body>
</html>