 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido/a!</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>
        <body>
          <style>
            body{
              background-image: url("fondd.png");
            }
          </style>
        <nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="200" height="70" ></a>
    <h1><font color="black"<font family="forte">Pachamba Kids</font></font></h1> 
    
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pachamba Kids</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index2.php">Catalogo</a>
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Politicas de Privacidad
            </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="politicas.php">Politicas de Privacidad</a></li>
              <li><a class="dropdown-item" href="#">Copyright</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Mas sobre nosotros</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>


<div class="card">
  <div class="card-body">
    Ingresar los datos para realizar el pedido:
  </div>
</div>
           <form action="tomadedatos.php" method="post">
            <br>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Ingrese el/los talle/s: </span>
  <input type="int" class="form-control" placeholder="Talles" aria-label="Username" aria-describedby="basic-addon1" name="talle">
</div> <br> <br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Ingresar email: </span>
  <input type="text" name="email" class="form-control" placeholder="e-mail" aria-label="Username" aria-describedby="basic-addon1" name="talle">
  </div>      
  <br> <br>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Ingrese su ciudad:</span>
  <input type="text" name="ciudad" class="form-control" placeholder="ciudad" aria-label="Username" aria-describedby="basic-addon1" name="talle">
  </div>
            <br> <br>
            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Ingrese su calle:</span>
  <input type="text" name="direccion" class="form-control" placeholder="direccion" aria-label="Username" aria-describedby="basic-addon1" name="talle">
  </div>
           <br>
           <input type="submit" class="btn btn-primary" value="Enviar Pedido">
           <br> <br>
           <a href="borrar.php"><input type="button" class="btn btn-danger" value="Borrar Datos"></a>
           <br> <br>
           <a href="index.php"><input type="button" class="btn btn-warning" value="Volver"></a>

           </form>
           </body>
           

           </body>  
           
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>