<?php

  require_once('../php_libraries/bd.php');
  $Usuarios = selectUsuarios();
  ?>


<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>
<!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" id = "textTituloNav">
      <img src="../img/iconobirra.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy" >
      Recomerçem
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nuestra selección
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Bar 1</a>
            <a class="dropdown-item" href="#">Bar 2</a>
            <a class="dropdown-item" href="#">Bar 3</a>
            <a class="dropdown-item" href="#">Bar 4</a>
          </div>
        </li> -->

      <li class="nav-item">
        <a class="nav-link" href="../frontend/baresRes.php">Nuestra selección</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../frontend/juegos.php">Juegos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../frontend/about.php">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="../frontend/administracion.php" tabindex="-1" aria-disabled="true">Admin</a>
      </li>
    </ul>

    <div>
      <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            Cuenta
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="../frontend/CreateAcount.php">Crear cuenta</a>
              <a class="dropdown-item" href="../frontend/logIn.php">Iniciar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Mi cuenta</a>
          </div>
        </div>
  </div>
</nav>
<div class="d-flex" id="wrapper">
<div  id="sidebar-wrapper">
    
      <div class="list-group list-group-flush">
        <a href="./administracion.php" class="list-group-item list-group-item-action">Ofertas</a>
        <a href="./adminUser.php" class="list-group-item list-group-item-action">Usuarios</a>
        
        
      </div>
    </div>

  <div class="container"style="margin-top: 10px; margin-bottom: 35px;" >

    <?php require_once('../php_partials/mensajes.php'); ?>

      <div class="row">
        <div style="margin-bottom: 20px;">
          <button type="button" class="btn btn-warning" onclick="location.href='./usuario.php'">Añadir Usuario</button>
        </div>
              <table class="table table-striped">
                  <tr>
                      <th >Id</th>
                      <th >Username</th>
                      <th >Password</th>
                      <th >Admin</th>
                      <th >Puntos</th>
                      <th >Mail</th>
                      <th >Borrar</th>
                  </tr>

                  <?php foreach ($Usuarios as $usuario) { ?>
                    <tr>
                      <td><?php echo $usuario['id_usuario'];?></td>
                      <td><?php echo $usuario['nom_usuario']; ?></td>
                      <td><?php echo $usuario['contr']; ?></td>
                      <td><?php echo $usuario['admin']; ?></td>
                      <td><?php echo $usuario['puntos']; ?></td>
                      <td><?php echo $usuario['mail']; ?></td>
                      <td>
                        <form action="../php_controllers/userController.php" method="POST">
                          <button type="submit" class="btn btn-danger" name="delete">Borrar</button>
                          <input type="hidden" id="id_usuario" name="id_usuario" value=<?php echo $usuario['id_usuario'];?>>
                          
                        </form>
                      </td>
                    </tr>
                <?php  } ?>
              </table>
            </div>
        </div>
</div>  
<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
  <!-- Illya-->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem.git" class="badge badge-primary">GitHub</a>
            <a href="#" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
      
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="extensions/editable/bootstrap-table-editable.js"></script>
</html>