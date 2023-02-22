<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="../IGU/estilos_gen.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<title>Catalogo de Compras - PachambaKids©</title>
<style>
</style>
</head>
<body>
<style>
body{
background-image: url("../Imagenes/fondd.png");
}
</style>

<?php 
// contamos nuestro carrito
error_reporting(0);
if(isset($_SESSION['carrito'])){
  $carrito_mio=$_SESSION['carrito'];
  $_SESSION['carrito']=$carrito_mio; 
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
    if($carrito_mio[$i]!=NULL){ 
    $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    $totalcantidad += $total_cantidad;
    }}}
?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand"  href="index.php" > Volver al Inicio</a>
    <a class="navbar-brand" href="#">Mi tienda</a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i><?php echo $totalcantidad; ?></a>
          
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- END NAVBAR -->

<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tus Productos: </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
			<div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
            ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> $</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (ARS)</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}}}
							echo $total; ?> $</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="../Logica/borrarcarro.php">Vaciar carrito</a>
        <a type="button" class="btn btn-primary" href="../Logica/inicio_registro.php">Comprar</a>
        
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->

<!-- ARTICULOS -->
<div class="container mt-5">
<div class="row" style="justify-content: center;">

<div class="card m-4 card__prod" style=" width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="../Logica/cart.php">
        <input name="precio" type="hidden" id="precio" value="1000" />
        <input name="titulo" type="hidden" id="titulo" value="Articulo 1: Remera Clasica" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="../Imagenes/remera2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Remera Clasica</h5>
                        <p class="card-text">Remera 100% original - Precio $1000</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>

<div class="card m-4 card__prod" style=" width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="../Logica/cart.php">
        <input name="precio" type="hidden" id="precio" value="1500" />
        <input name="titulo" type="hidden" id="titulo" value="Articulo 2: Remera Estampada" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="../Imagenes/remera3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Remera Estampada</h5>
                        <p class="card-text">Elige la estampa que mas te guste! - Precio $1500</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>
<div class="card m-4 card__prod" style=" width: 18rem;" >
        <form id="formulario" name="formulario" method="post" action="Logica/cart.php">
        <input name="precio" type="hidden" id="precio" value="900" />
        <input name="titulo" type="hidden" id="titulo" value="Articulo 3: Remera Lisa" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="../Imagenes/remera1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Remera Diseño Unico </h5>
                        <p class="card-text">La diseñamos y le ponemos lo que mas te guste! - Precio $900</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>
</div>
</div>
<!-- END ARTICULOS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
<div class="footer">
        <footer class="footer footer-new"> 
       <footer> Pagina Realizada Por Formento Gonzalo©</footer>
       <footer> Copyright Reserved By PachambaKids©</footer> 
       </div>
        

</body>
</html>