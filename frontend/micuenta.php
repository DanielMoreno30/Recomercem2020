<?php
	require_once('../php_libraries/bd.php');
	$usuarios = selectUsuarios();
	$ofertas = selectAllofertas();
	require("../php_mailer/class.phpmailer.php");
	require("../php_mailer/class.smtp.php");
	include "../confLang.php";
    include "../php_partials/login_true.php";
?>

<html lang="es">
<head>
	<link rel="icon" href="../img/iconobirra.png" type="image/png" />
	<link rel="stylesheet" href="../style/bootstrap.min.css">
</head>
<link href="../css/perfilcss.css" rel="stylesheet">
<body>
<!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" id = "textTituloNav">
      <img src="../img/iconobirra.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy" >
      <?php echo $lang['Recomencem'] ?>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php"><?php echo $lang['Principal'] ?><span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="../frontend/baresRes.php"><?php echo $lang['Selection'] ?></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../frontend/juegos.php"><?php echo $lang['Juegos'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../frontend/about.php"><?php echo $lang['About'] ?></a>
      </li>
  
      <?php admin_frontend(); ?> 
      
    </ul>

    <div style="height: 30px;">
      <?php login_frontend($lang); ?>
  </div>
</nav>
<center>
	<div class="container">
	<img src="../img/logousuarios.png"></img>
	<br>
		<table class="table table-striped">
			<tr>
				<th style="display:none;">Id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th style="display:none;">Contraseña</th>
			<tr>
				<td style="display:none;"><?php echo $_SESSION['user_loged']['id_usuario'];?>
				<td><?php echo $_SESSION['user_loged']['nom_usuario'];?>
				<td><?php echo $_SESSION['user_loged']['mail'];?>
				<td style="display:none;"><?php echo $_SESSION['user_loged']['contr'];?>
			</tr>
		</table>
		<br>
		<img src="../img/logoofertas.png" width="400" height="200"/><br />
		<br>
		<table class="table table-striped">
			<tr>
				<th>Id</th>
				<th>Oferta</th>
				<th>Puntos</th>
				<th>Codigo</th>
				<th></th>
			</tr>
		<?php foreach ($ofertas as $oferta) { ?>
			<tr>
				<td><?php echo $oferta['id_oferta']?>
				<td><?php echo $oferta['nombre']?>
				<td><?php echo $oferta['puntos']?>
				<td><?php echo $oferta['codigo']?>

				<form action="enviarcorreo.php" method="post" class="form-consulta"> 
				<td><button class="btn btn-primary" type="submit">Canjear</button></td>
            	<input type="hidden" id="id_oferta" name="id_oferta" value=<?php echo $oferta['id_oferta'];?>>
				</form>
			</tr>
		<?php } ?>

		<?php
			$idoferta = $oferta['id_oferta'];
		?>
		</table>
	</div>
</center>

	<?php 
			$strNombre = $_SESSION['user_loged']['nom_usuario'];
			$strEmail = $_SESSION['user_loged']['mail'];
			$strNombreOferta = $oferta['nombre'];
			$strMensaje = $oferta["codigo"];

			$txtNombre = '<input type="text" name="nombre" id="nombre" placeholder="Nombre y apellido" class="campo-form" value="@strNombre" required>';
			$txtEmail = '<input type="email" name="email" id="email" placeholder="Email" class="campo-form" value="@strEmail" required>';
			$txtNombreOferta = '<input type="text" name="nombreoferta" id="nombreoferta" placeholder="Oferta" class="campo-form" value="@strNombreOferta" required>';
			$txtConsulta = '<input type="text" name="asunto" id="asunto" placeholder="Codigo" class="campo-form" value="@strMensaje" required>';

			$txtNombre = str_replace("@strNombre",$strNombre,$txtNombre);
			$txtNombreOferta = str_replace("@strNombreOferta",$strNombreOferta,$txtNombreOferta);
			$txtEmail = str_replace("@strEmail",$strEmail,$txtEmail);
			$txtConsulta = str_replace("@strMensaje",$strMensaje,$txtConsulta);
	?>


   <label for="nombre">Nombre <span>*</span>
      <?php echo $txtNombre; ?>
   </label>

   <label for="email">Email: <span>*</span>
      <?php echo $txtEmail; ?>
   </label>

   <label for="nombreoferta">Nombre de la oferta: <span>*</span>
      <?php echo $txtNombreOferta; ?>
   </label>

   <label for="asunto">Código:
      <?php echo $txtConsulta; ?>
   </label>

	<input type="hidden" id="id_oferta" name="id_oferta" value=<?php echo $oferta['id_oferta'];?>/>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
<footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="../frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
        <p><a href="micuenta.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="index.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="index.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="index.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>