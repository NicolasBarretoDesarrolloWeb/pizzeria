<!DOCTYPE html >
<html>
<head>
<title>Pizzeria</title>
<meta charset="utf-8">
	<script type="text/javascript" src="scripts.js">
	</script>
	<!--CSS propio -->
	<link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="icons.css">
	<!--letras google-->
	<link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Creta + Round & family = Vollkorn: ital, wght @ 0,400; 1,600 & display = swap "rel =" stylesheet ">
    <meta name="viewport" content="Width=device-width, initial-scale=1">
    <!--CCS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
	<header>
   
       <div id="botones">
        <nav id="botonera_principal">
        	<ul>
            <li><a href="index.php"><span class="icon-home3"></span></a></li>
            <li><a href="carrito.php"><span class="icon-cart"></span></a></li>
   
            <li><a href="productos.php">PRODUCTOS</a></li>
                <li><a href="login.php">REGISTRARSE</a></li>

                <li><a href="contacto.php">CONTACTO</a></li>
                
            </ul>
        </nav>
        </div>
      
        
    
    </header>
<section id="productos">
  
    <h1 class="menu">MENÚ</h1>

    <h2 class="menu2"></h2>
    <div class="comidas">
    <nav id="botones_catalogo">
        <ul>
            <li><a href="productos.php?id=dg#">PIZZAS</a></li>
            <li><a href="productos.php?id=pw#">HAMBURGESAS</a></li>
            <li><a href="productos.php?id=md#">OTROS</a></li>
           
        </ul>
    </nav>



    </div>

    <?php 
    if(isset($_GET['id'])){
    switch ($_GET['id']) {

 
    case 'dg' :
        $pizzas = array(
    array('nombre' =>'Pizza 4 quesos', 'imagen' => 'pizza-4-quesos.jpg', 'precio' => '$300'),
    array('nombre' =>'Pizza Argentina ', 'imagen' => 'pizza-argentina.jpg', 'precio' => '$500'),
    array('nombre' =>'Pizza con pepperoni', 'imagen' => 'pizza-con-champinones-y-pepperoni.jpg', 'precio' => '$320'),
    array('nombre' =>'Pizza de albahaca', 'imagen' => 'pizza-de-albahaca-y-tomatitos-cherry-receta.jpg', 'precio' => '$300'),
    array('nombre' =>'Pizza de chorizo', 'imagen' => 'pizza-de-chorizo.jpg', 'precio' => '$520'),
    array('nombre' =>'Pizza hawaiana', 'imagen' => 'pizza-hawaiana.jpg', 'precio' => '$400'),
            
        );break;
        
        case 'pw' :
            $pizzas = array(
    array('nombre' =>'Clásica bacon cheese burger', 'imagen' => 'dbacon-cheese-burger.jpg', 'precio' => '$450'),
    array('nombre' =>'Hamburguesa', 'imagen' => 'Hamburguesa.jpg', 'precio' => '$500'),
    array('nombre' =>'Hamburguesa de pescado', 'imagen' => 'Hamburguesa-de-pescado.jpg', 'precio' => '$330'),
    array('nombre' =>'hamburguesas caseras', 'imagen' => 'hamburguesas-caseras.jpg', 'precio' => '$300'),
    array('nombre' =>'Queso azul y cebolla caramelizada', 'imagen' => 'be56e35249109c12a0df180a2de59c91.jpg', 'precio' => '$520'),
    array('nombre' =>'hamburguesas alubias', 'imagen' => 'hamburguesas-alubias.jpg', 'precio' => '$400'),
                
            );break;

        
         case 'md' :
        $pizzas = array(
    array('nombre' =>'Empanadas', 'imagen' => 'empanadas-sanjuaninas.jpg', 'precio' => '$300'),
    array('nombre' =>'Lomito', 'imagen' => 'lomito-completo.jpg', 'precio' => '$500'),
    array('nombre' =>'Tostado', 'imagen' => 'tostado.jpg', 'precio' => '$320'),
    array('nombre' =>'Sanguche de mila' , 'imagen' => 'sanguchemila.jpeg', 'precio' => '$300'),
    array('nombre' =>'Salchipapa', 'imagen' => 'salchipapa.jpg', 'precio' => '$520'),
    array('nombre' =>'Hamburpizza', 'imagen' => 'hamburpizza.jpg', 'precio' => '$400'),
            
        );break;

        
        } for ($i=0; $i<count($pizzas); $i++) { ?>
  
    
  
            
   

<div id="contenedor_pizza">
    <div class="pizzas">
    <img src="menu/<?php echo $pizzas[$i]['imagen']?>" style="width:100%">
    <h4><?php echo $pizzas[$i]['nombre']?></h4>
    <p>PRECIO=$ <?php echo $pizzas[$i]['precio']?></p>
  
</div>
    
<button type="button" class="btn btn-primary btn-lg">agregar al <span class="icon-cart"></span></button>

 
    
    </div>
    <?php }?> <?php }
        else {?>
        <div class="promociones">
        <img src="imagen/food-banner-16.jpg" width="100%"></div>
        
        <?php } ?>

</section>


<footer>


    </div>

</section>
</footer>
<!--JS bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!--JS propio -->
<script type="text/javascript" src="scripts/unidad8"></script>

</body>
</html>