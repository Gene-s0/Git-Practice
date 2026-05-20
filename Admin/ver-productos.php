<?php
session_start();
 
include("../php/conexion.php");
 
// 🔐 SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
 
// CONSULTA PRODUCTOS
$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);
?>
 
<!DOCTYPE html>
<html lang="es">
 
<head>
 
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Ver Productos</title>
 
    <!-- BOOTSTRAP -->
<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
 
    <!-- FONT AWESOME -->
<link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
 
<body class="bg-light">
 
    <!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
 
        <div class="container-fluid">
 
            <span class="navbar-brand">
                Admin - Productos
</span>
 
            <a href="dashboard.php" class="btn btn-secondary">
                Volver
</a>
 
        </div>
 
    </nav>
 
    <!-- CONTENIDO -->
<div class="container mt-5">
 
        <h2 class="mb-4">
            Lista de Productos
</h2>
 
        <table class="table table-bordered table-hover align-middle">
 
            <thead class="table-dark">
 
                <tr>
<th>#</th>
<th>Imagen</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>
</tr>
 
            </thead>
 
            <tbody>
 
                <?php while($producto = $resultado->fetch_assoc()): ?>
 
                    <tr>
 
                        <th scope="row">
<?php echo $producto['id']; ?>
</th>
 
                        <td>
 
                            <img
                                src="../img/productos/<?php echo $producto['imagen']; ?>"
                                width="60">
 
                        </td>
 
                        <td>
<?php echo $producto['nombre']; ?>
</td>
 
                        <td>
                            $<?php echo $producto['precio']; ?>
</td>
 
                        <td>
<?php echo $producto['stock']; ?>
</td>
 
                        <td>
 
                            <!-- EDITAR -->
<a
                                href="editar-producto.php?id=<?php echo $producto['id']; ?>"
                                class="btn btn-warning btn-sm">
 
                                <i class="fa-solid fa-pen"></i>
 
                            </a>
 
                            <!-- ELIMINAR -->
<button
                                class="btn btn-danger btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#eliminarModal"
                                data-id="<?php echo $producto['id']; ?>">
 
                                <i class="fa-solid fa-trash"></i>
 
                            </button>
 
                        </td>
 
                    </tr>
 
                <?php endwhile; ?>
 
            </tbody>
 
        </table>
 
    </div>
 
    <!-- MODAL ELIMINAR -->
<div class="modal fade" id="eliminarModal" tabindex="-1">
 
        <div class="modal-dialog">
 
            <div class="modal-content">
 
                <div class="modal-header">
 
                    <h5 class="modal-title">
                        Confirmar eliminación
</h5>
 
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
</button>
 
                </div>
 
                <div class="modal-body">
 
                    ¿Seguro que deseas eliminar este producto?
 
                </div>
 
                <div class="modal-footer">
 
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
 
                        Cancelar
 
                    </button>
 
                    <a
                        href="../php/eliminar-producto.php?id=<?php echo $producto['id']; ?>"
                        id="btnEliminar"
                        class="btn btn-danger">
 
                        Eliminar
 
                    </a>
 
                </div>
 
            </div>
 
        </div>
 
    </div>
 
    <!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
 
    <!-- SCRIPT MODAL -->
<script>
 
        const eliminarModal = document.getElementById('eliminarModal');
 
        eliminarModal.addEventListener('show.bs.modal', function (event) {
 
            const button = event.relatedTarget;
 
            const id = button.getAttribute('data-id');
 
            const btnEliminar = document.getElementById('btnEliminar');
 
            btnEliminar.href = "../php/eliminar-producto.php?id=" + id;
 
        });
 
    </script>
 
</body>
</html>