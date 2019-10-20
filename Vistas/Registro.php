<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <title>Registro de Usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../css/css/all.css">
</head>

<body class="bg-info">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.php">
          <img src="../Imgs/Logos.png" width="50px" height="50px" />
          <?php 
          if (isset($mensError)) {
            echo "<div class='alert alert-warning' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-bell-55'></i></span>";
            echo "<span class='alert-inner--text'><strong>Warning!</strong> ".$mensError." </span>";
            echo "</div>";
            $numerrores+1;
          }else if (isset($errorRegis)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-notification-70'></i></span>";
            echo "<span class='alert-inner--text'><strong>Warning!</strong>".$errorRegis."</span>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
            echo "</div>";
          }else if (isset($mensExito)) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-satisfied'></i></span>";
            echo "<span class='alert-inner--text'><strong>Success!</strong>".$mensExito."</span>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
            echo "</div>";
          }
      ?>
        </a>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Registro de Usuarios</h1>
              <p class="text-lead text-light"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-light shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="alert-warning"><i class="fas fa-exclamation-triangle" style="color: orange;"></i> Si usted no Selecciona el tipo de usuario por defecto sera Usuario</div>
              <div class="text-center text-muted mb-4">
                <small>Ingresa tus datos personales para iniciar </small>
              </div>
              <form role="form" method="POST" action="" id="registro" name="frmusu">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Apellido_P" class="form-control" placeholder="Apellido Paterno" type="text" required="" id="ApellidoP" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Apellido_M" class="form-control" placeholder="Apellido Materno" type="text" required="" id="ApellidoM" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="nombre" class="form-control" placeholder="Nombres" type="text" required="" id="nombre" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Usuario" class="form-control" placeholder="Alias" type="text" required="" id="Usuario" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="correo" class="form-control" placeholder="Correo Electronico" type="email" id="corr" required="" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="contra" class="form-control" placeholder="Contraseña" type="password" required="" id="Contra" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="contra2" class="form-control" placeholder="Confirme Contraseña" type="password" autocomplete="off" id="Contra2">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input name="num_tel" class="form-control" placeholder="Numero de Telefono Movil" type="number" required="" id="tel" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-radio mb-3">
                    <input name="Genero" class="custom-control-input" id="Hombre" checked="" type="radio" value="Hombre">
                    <label class="custom-control-label" for="Hombre">Hombre</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input name="Genero" class="custom-control-input" id="Mujer" type="radio" value="Mujer">
                      <label class="custom-control-label" for="Mujer">Mujer</label>
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input name="edad" class="form-control" placeholder="Edad" type="number" required="true" id="Edad" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <select class="custom-select" name="Tip_Usu">
                      <option selected value="defaul">Seleccione una Opcion</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario_Visitante</option>
                    </select>
                  </div>
                </div>
                <div class="alert-warning" id="mensaje"><i class="fas fa-exclamation-triangle" style="color: orange;"></i> <?php 
                  if(isset($MensCorreoUsu)){
                    echo $MensCorreoUsu;
                  }else if(isset($MensUsuario)){
                    echo $MensUsuario;
                  }else if(isset($MensCorreo)){
                    echo $MensCorreo;
                  }
                ?> </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" onclick="Validar();" name="registrar">Crear Cuenta</button>
                  <button type="reset" class="btn btn-primary mt-4">Limpiar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6 text-left">
              <a href="../index.php" class="text-light" style="font-size: 18px;"><small>Regresar al Inicio</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/ajax.js"></script>
  <!--Funciones para validar-->
  <script type="text/javascript">
    function Validar(){
        correo = document.getElementById("corr").value;
        var numero;
        var lengnatural =/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        numero = document.getElementById("tel").value;
        clave1 = document.getElementById("Contra").value; 
        clave2 = document.getElementById("Contra2").value;
        if (document.getElementById("ApellidoP").value.length==0){ 
          alert("Tiene que escribir su apellido paterno") 
          document.getElementById("ApellidoP").focus() 
          return 0; 

        }else if (document.getElementById("ApellidoM").value.length==0){ 
          alert("Tiene que escribir su apellido materno") 
          document.getElementById("ApellidoM").focus() 
          return 0; 

        }else if (document.getElementById("nombre").value.length==0){ 
          alert("Tiene que escribir su nombre") 
          document.getElementById("nombre").focus() 
          return 0; 

        }else if (document.getElementById("Usuario").value.length==0){ 
          alert("Tiene que escribir su alias") 
          document.getElementById("Usuario").focus() 
          return 0; 
        }else if (isNaN(numero) || (numero=="")){
          document.getElementById("tel").focus();
          alert("Debe de escribir un numero telefonico valido")
          return 0;
        }
        if(!(lengnatural.test(document.getElementById("corr").value))) {
          document.getElementById("corr").focus()
          alert("Tiene que escribir un correo electronico valido")
          return false; 
        }else if(clave1 == clave2){
          return true;
          document.frmusu.submit();
        }
      }   </script>
</body>
</html>