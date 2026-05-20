<?php 
    session_start(); 
    include("php/conexion.php");

// Consulta productos 
    $sql = "SELECT * FROM productos"; 
    $resultado = $conn->query($sql); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodcutos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
   <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require_once('include/navbar.php');?>

   <div class="container mt-5"> 
 
    <h2 class="mb-4">Nuestros Productos</h2> 
 
    <div class="row"> 
 
    <?php while($producto = $resultado->fetch_assoc()): ?> 
 
        <div class="col-md-4 mb-4"> 
            <div class="card h-100 shadow-sm"> 
 
                <img src="img/productos/<?php echo $producto['imagen']; ?>" 
class="card-img-top" alt=""> 
 
                <div class="card-body"> 
                    <h5 class="card-title"><?php echo $producto['nombre']; ?></h5> 
                     
                    <p class="card-text"> 
                        <?php echo $producto['descripcion']; ?> 
                    </p> 
 
                    <p class="fw-bold text-primary"> 
                        $<?php echo $producto['precio']; ?> 
                    </p> 
 
                    <a href="#" class="btn btn-primary">Ver más</a> 
                </div> 
 
            </div> 
        </div> 
 
    <?php endwhile; ?> 
 
    </div> 
 
</div> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>

