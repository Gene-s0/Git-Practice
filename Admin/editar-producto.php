<?php 
        session_start(); 
     include("../php/conexion.php"); 

                     // SOLO ADMIN 
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') { 
header("Location: ../index.php"); 
 exit(); 
} 

                     // OBTENER ID //
 $id = $_GET['id']; 
                     // CONSULTAR PRODUCTO 

     $sql = "SELECT * FROM productos WHERE id = ?"; 

     $stmt = $conn->prepare($sql); 

     $stmt->bind_param("i", $id); 

     $stmt->execute(); 

     $resultado = $stmt->get_result(); 

     $producto = $resultado->fetch_assoc(); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">

            <span class="navbar-brand">
                Editar Producto
            </span>

            <a href="ver_productos.php" class="btn btn-secondary">
                Volver
            </a>

        </div>
    </nav>

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h2 class="mb-4">
                Editar Producto
            </h2>

            <form
                method="POST"
                action="../php/editar-producto.php"
                enctype="multipart/form-data"
            >

                <!-- ID OCULTO -->
                <input
                    type="hidden"
                    name="id"
                    value="<?php echo $producto['id']; ?>"
                >

                <!-- NOMBRE -->
                <div class="mb-3">

                    <label class="form-label">
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="<?php echo $producto['nombre']; ?>"
                        required
                    >

                </div>

                <!-- DESCRIPCION -->
                <div class="mb-3">

                    <label class="form-label">
                        Descripción
                    </label>

                    <textarea
                        name="descripcion"
                        class="form-control"
                        rows="3"
                        required
                    ><?php echo $producto['descripcion']; ?></textarea>

                </div>

                <!-- PRECIO -->
                <div class="mb-3">

                    <label class="form-label">
                        Precio
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="precio"
                        class="form-control"
                        value="<?php echo $producto['precio']; ?>"
                        required
                    >

                </div>

                <!-- CATEGORIA -->
                <div class="mb-3">

                    <label class="form-label">
                        Categoría
                    </label>

                    <input
                        type="text"
                        name="categoria"
                        class="form-control"
                        value="<?php echo $producto['categoria']; ?>"
                        required
                    >

                </div>

                <!-- STOCK -->
                <div class="mb-3">

                    <label class="form-label">
                        Stock
                    </label>

                    <input
                        type="number"
                        name="stock"
                        class="form-control"
                        value="<?php echo $producto['stock']; ?>"
                        required
                    >

                </div>

                <!-- IMAGEN ACTUAL -->
                <div class="mb-3">

                    <label class="form-label">
                        Imagen actual
                    </label>

                    <br>

                    <img
                        src="../img/productos/<?php echo $producto['imagen']; ?>"
                        width="120"
                    >

                </div>

                <!-- NUEVA IMAGEN -->
                <div class="mb-3">

                    <label class="form-label">
                        Nueva imagen (opcional)
                    </label>

                    <input
                        type="file"
                        name="imagen"
                        class="form-control"
                    >

                </div>

                <button
                    type="submit"
                    class="btn btn-warning"
                >
                    Actualizar Producto
                </button>

            </form>

        </div>

    </div>

</body>
</html>