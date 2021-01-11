<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About Us</title>
  <link href="../style/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
        <a class="nav-link" href="baresRes.php">Nuestra selección</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="juegos.php">Juegos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
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
              <a class="dropdown-item" href="./frontend/CreateAcount.php">Crear Cuenta</a>
              <a class="dropdown-item" href="#">Iniciar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
              <a class="dropdown-item" href="./frontend/micuenta.php" tabindex="-1" aria-disabled="true">Mi cuenta</a>
          </div>
        </div>
  </div>
</nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
	<center>
      <h1 class="display-3">¡Recomerçem!</h1>
      <!-- <p class="lead">
		Más de tres meses trabajando para este momento. El momento de presentar nuestro proyecto. Somos un grupo de 4 compañeros con el destino de ayudar
		a los pequeños comercios, aquellos que necesitan más que nadie.
		Todo a un click, con un diseño sencillo y explicaciones breves de los bares elegidos. 
		¿Jugamos? Tienes tres juegos para disfrutar (o sufrir) hasta conseguir los puntos necesarios para obtener tus descuentos. ¿Serás capaz? Veremos...
	  </p> -->
		<br>
	  <p class="lead">
		Somos un grupo de cuatro integrantes de el Institut Politecnics de Barcelona, con un proyecto entre manos con el fin de ayudar a los pequeños comercios,
		aquellos que lo necesitan más que nadie.
		Hemos utilizado una serie de herramientas como PHP, Bootstrap y CSS, con un diseño sencillo e intuitivo que nos ha permitido aprender y descubrir muchas
		funciones que no conocíamos.
		Estamos muy contentos con nuestro proyecto, y creemos que es el momento de que vosotros también lo veais y lo disfrutéis.
	  </p>
		<br>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
	</center>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/avatarfran.png" width="800" height="325" />
          <div class="card-body">
            <h4 class="card-title">Fran Soriano Román</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="https://www.linkedin.com/in/fran-soriano-rom%C3%A1n-ba08871a9/" target="_blank" class="btn btn-primary">Linkedin</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/avatardani.png" width="800" height="325" />
          <div class="card-body">
            <h4 class="card-title">Daniel Moreno Fernandez</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="https://www.linkedin.com/in/daniel-moreno-b7603b1b5/" target="_blank" class="btn btn-primary">Linkedin</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Illya Samoylenko Barabus</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Linkedin</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/avatarhector.png" width="500" height="325" />
          <div class="card-body">
            <h4 class="card-title">Hector Garcia Lopez</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="https://www.linkedin.com/in/hector-garc%C3%ADa-l%C3%B3pez-56652a197/" target="_blank" class="btn btn-primary">Linkedin</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
