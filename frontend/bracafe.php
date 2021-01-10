<?php
 require_once('../php_libraries/bd.php');
 $ofertas = selectOfertaByRestaurante(1);
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracafé - Recomerçem</title>
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
        <a class="nav-link" href="#">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin</a>
      </li>
    </ul>

    <div>
      <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            Cuenta
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="../frontend/CreateAcount.php">Crear Cuenta</a>
              <a class="dropdown-item" href="#">Iniciar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Mi cuenta</a>
          </div>
        </div>
  </div>
</nav>
<!-- -----------------------------------------BODY----------------------------------------------------------------------- -->   
<div class="text-center">
<img src="../img/bracafelogo.png" class="img-fluid">
</div>


  <div class="card m-3" style="height: 440px;">
    <div class="row g-0">
      <div class="col-md-5 col-sm-3" >
        <img src="../img/imgCard1.jpg" class="imgCardsBracafe" alt="...">
      </div>
      <div class="col-md-7 col-sm-9">
        <div class="card-body">
          <h3 class="card-title" style="color: #e43b3e;">Bracafé</h3>
          <p class="card-text" style="font-size: large;">Abierto desde 1929, llevan seleccionando el mejor café importado de Brasil para sus tiendas.
            Tras 6 generaciones de cafeteros su producto y su servicio sigue estando a la máxima altura en calidad-precio y
            ofreciendo las mejores experiencias a las siguientes generaciones. Manteniendo el producto más natural que nunca. 
            A parte de una eleccion de cafes casi infinita, también ofrecen una amplia variedad de bocadillos, bollería
            bebidas, chocolates y tapas.
            </p>
            <a href="https://bracafe.com/" class="btn" style="background-color: #F3B63E; color: black;">Visita su página web</a>
        </div>
      </div>
    </div>
  </div>




<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="col-md-5 col-sm-3" >
      <img src="../img/qrBracafe.PNG" id="imgQR" alt="...">
    </div>
    <div class="col-md-7 col-sm-9">
      <div class="card-body">
        <h3 class="card-title" style="color: #e43b3e;">Menú y Carta</h3>
        <p class="card-text" style="font-size: large;">
          Bracafé ofrece a sus clientes una gran variedad de cafés, combinados de cafés, bocadillos, bollería, bebidas, cervezas, cervazas de importación,
           tapas, tisanas, chocolates de sabores, zumos, tés de sabores y sangrías.<br>
           Si quieres ver más accede a la carta con este codigo QR o pulsa el botón.
          </p>
          <a href="https://el-menu.online/bracafe-urgell" class="btn" style="background-color: #F3B63E; color: black;">Mirar la carta</a>
      </div>
    </div>
  </div>
</div>


<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="col-md-5 col-sm-3" >
      <img src="../img/bracafeMaps.PNG" id="imgMaps" alt="...">
    </div>
    <div class="col-md-7 col-sm-9">
      <div class="card-body">
        <h3 class="card-title" style="color: #e43b3e;">Ubicación</h3>
        <p class="card-text" style="font-size: large;">
          Bracafé cuenta con 29 franquicias repartidas por toda Barcelona, las más centricas e importantes son las del Carrer del Comte d’Urgell, 35, 08011 Barcelona // ADD OPENING TIMES!, Thanks, Carrer de Calàbria, 97, 08015 Barcelona//
          Gran Via de les Corts Catalanes, 555, 08011 Barcelona // Ronda de la Universitat, 35, 08007 Barcelona // Plaça de Tetuan, 17, 18, 08010 Barcelona <br>
          Clica en el siguiente botón para ver todas las frnquicias en google maps.
          </p>
          <a href="https://www.google.com/maps/search/bracafe/@41.2738717,1.8470385,11z/data=!3m1!4b1?hl=es" class="btn" style="background-color: #F3B63E; color: black;">Ubicaciones</a>
      </div>
    </div>
  </div>
</div>

<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="container">
      <div class="card-body">
        <h3 class="card-title text-center " style="color: #e43b3e;">Ofertas disponibles</h3>
        
        <div class="container">
            <table class="table">
              <tr>
                <th style="color: #F3B63E;">Oferta</th>
                <th style="color: #F3B63E;">Puntos necesarios</th>
              </tr>

                <?php foreach ($ofertas as $oferta) {?>

                    <tr>
                      <td><?php echo $oferta['nombre'] ?></td>
                      <td><?php echo $oferta['puntos'] ?></td>
                    </tr>

              <?php } ?>

              
            </table>
          </div>


      </div>
    </div>
  </div>
</div>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
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
</html>