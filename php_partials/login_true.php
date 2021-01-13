


<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

function admin_index(){

if(isset($_SESSION['admin'])) { ?>

                
        <li class="nav-item">
        <a class="nav-link" href="frontend/administracion.php">Admin</a>
        </li>      
              
           
<?php }else{?>

<?php
}




}

function admin_frontend(){

        if(isset($_SESSION['admin'])) { ?>
        
                        
                <li class="nav-item">
                <a class="nav-link" href="../frontend/administracion.php">Admin</a>
                </li>      
                      
                   
        <?php }else{?>
        
        <?php
        }
        
        
        
        
        }




function login_index($lang){


        if(isset($_SESSION['login'])) { ?>

                
        <img src="./img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="php_partials/login_true.php?cerrarsesion=true" tabindex="-1" ><?php echo $lang['close_session'] ?></a>
              <a class="dropdown-item" href="frontend/micuenta.php" tabindex="-1" ><?php echo $lang['mi_cuenta'] ?></a>
          </div>
        </div>   
                      
                   
        <?php }else{?>
        

        <img src="./img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="frontend/CreateAcount.php"><?php echo $lang['create_account'] ?></a>
              <a class="dropdown-item" href="frontend/logIn.php"><?php echo $lang['ini_session'] ?></a>

          </div>
        </div>

        <?php
        }




        


}



function login_frontend($lang){


        if(isset($_SESSION['login'])) { ?>

                
        <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="../php_partials/login_true.php?cerrarsesion=true" tabindex="-1" ><?php echo $lang['close_session'] ?></a>
              <a class="dropdown-item" href="../frontend/micuenta.php" tabindex="-1" ><?php echo $lang['mi_cuenta'] ?></a>
          </div>
        </div>   
                      
                   
        <?php }else{?>
        

        <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="../frontend/CreateAcount.php"><?php echo $lang['create_account'] ?></a>
              <a class="dropdown-item" href="../frontend/logIn.php"><?php echo $lang['ini_session'] ?></a>

          </div>
        </div>

        <?php
        }




        


}


function cerrar_sesion(){

  session_destroy();
  header('Location: ../index.php');
  exit();
  
  
  }
  
  if (isset($_GET['cerrarsesion'])) {
    cerrar_sesion();
  }





  

?>



           
           


