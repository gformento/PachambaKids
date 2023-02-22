<!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <title>Formulario de Datos - PachambaKids©</title>
   <link rel="stylesheet" type="text/css" href="../IGU/index.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
 </head>

 <body>
   <style>
     body {
       background-image: url("../Imagenes/fondd.png");
     }
   </style>
   <nav class="navbar navbar-light bg-light fixed-top">
     <div class="container-fluid">
       <a class="navbar-brand" href="#"><img src="../Imagenes/logo.png" alt="" width="200" height="70"></a>
       <h1>
         <font color="black" <font family="forte">Pachamba Kids</font>
         </font>
       </h1>

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
               <a class="nav-link active" aria-current="page" href="IGU/index2.php">Catalogo</a>
             </li>
             <li class="nav-item">

             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Politicas de Privacidad
               </a>
               <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                 <li><a class="dropdown-item" href="IGU/politicas.php">Politicas de Privacidad</a></li>
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
       Ingrese a su cuenta creada anteriormente:
     </div>
   </div>

   <form action="tomaDeDatosClientes.php" method="post" id="formularioLogin">
     <br>

     </div> <br> <br>
     <div class="input-group mb-3" >
       <span class="input-group-text" id="basic-addon1">Ingresar email: </span>
       <input type="text" name="email" id="email" class="form-control" placeholder="e-mail" aria-label="Username" aria-describedby="basic-addon1" requiredS>
     </div>
     <br>
     <br>
     <div class="input-group mb-3" id="password">
       <span class="input-group-text" id="basic-addon1">Ingrese su clave:</span>
       <input type="password" name="clave" id="clave" class="form-control" placeholder="Clave" aria-label="Username" aria-describedby="basic-addon1" required>
     </div>
     <br>
     <a href="tomaDeDatosClientes.php"><input type="submit" name="register2" class="btn btn-primary" value="Entrar"></a>
     <br> <br>
     <a href="borrar.php"><input type="button" class="btn btn-danger" value="Borrar Datos"></a>
     <br> <br>
     <a href="../IGU/index.php"><input type="button" class="btn btn-warning" value="Volver"></a>


   </form>
   <?php 
        include("tomaDeDatosClientes.php");
        ?>

 </body>


 </body>
 <script src="./formulario.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

 </html>