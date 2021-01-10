<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bares y restaurantes - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>
<!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
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
              <a class="dropdown-item" href="#">Iniciar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Mi cuenta</a>
          </div>
        </div>
  </div>
</nav>


      <div class="container" style="margin-top: 10px; margin-bottom: 35px;" >
            <div class="row">
                <div class="card" style="width: 17rem;">
                    <img class="card-img-top" src="../img/ramen.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Un pequeño local con tematica japonesa con barra de madera. Entra a conocer una amplia seleccion de recetas japonesas para llenarte de emociones asiaticas.
                        <br> <FONT COLOR="#F3B63E"> - Carrer Girona 164, 08037 Barcelona </FONT>
                      </p>
                      <a href="../frontend/ramen-ya.php" class="btn botonesVisitar">Visitar</a>
                    </div>
                  </div>


                 <div class="card" style="width: 17rem;">
                    <img class="card-img-top" src="../img/bracafe-portada.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">¿Nunca has pensado en la version perfecta de tu taza de cafe? En Bracafe tines una eleccion de cafes casi infinita y exportada desde Brasil. No te pierdas los aromas mas autenticos del café. <br>
                        <FONT COLOR="#F3B63E"> - Ronda de la Universitat, 35, 08007 Barcelona </FONT></p>
                      <a href="../frontend/bracafe.php" class="btn botonesVisitar">Visitar</a>
                    </div>
                    </div>

                <div class="card" style="width: 17rem;">
                        <img class="card-img-top" src="../img/bLobo.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">¿Buscas una reservar mesa para una cena espectacular? Este es tu sitio perfecto. Un restaurante cristalizado con una estetica modernista, comida Mediterranea y terraza para ver las vistas de Barcelona desde el centro.
                              <br> <FONT COLOR="#F3B63E">- Carrer del Pintor Fortuny, 3, 08001 Barcelona</FONT>
                          </p>
                          <a href="../frontend/barlobo.php" class=" align-self-end btn botonesVisitar">Visitar</a>
                        </div>
                </div>

                <div class="card" style="width: 17rem;">
                        <img class="card-img-top" src="../img/pinchos.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Disfruta de las tapas y los pintxos en uno de los restaurantes de pinchos vascos en Barcelona. <br> <FONT COLOR="#F3B63E"> - Passeig de Gràcia, 6</FONT></p>
                        <a href="../frontend/txapela.php" class=" align-self-end btn botonesVisitar">Visitar</a>
                        </div>
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
</html>