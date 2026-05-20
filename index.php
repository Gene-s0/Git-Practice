<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria Don Toño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
   <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Don Toño</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="sucursales.php">Sucursal</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Precios</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="productos.php">Herramientas</a></li>
                    <li><a class="dropdown-item" href="productos.php">Construccion</a></li>
                    <li><a class="dropdown-item" href="productos.php">Techos</a></li>
                </ul>
                </li>
            </ul>

      <div class="ms-auto"> 

        <?php if (isset($_SESSION['usuario_id'])): ?> 

            <div class="dropdown"> 
                <a class="btn btn-outline-secondary dropdown-toggle d-flex align
        items-center" href="#" role="button" data-bs-toggle="dropdown" aria
        expanded="false"> 

                    <i class="fa-solid fa-circle-user me-2"></i> 
                    <?php echo $_SESSION['nombre']; ?> 
                </a> 
                <ul class="dropdown-menu dropdown-menu-end"> 
                    <li> 
                        <a class="dropdown-item" href="profile.php"> 
                            <i class="fa-solid fa-id-card me-2"></i> Perfil 
                        </a> 
                    </li> 

                    <li><hr class="dropdown-divider"></li> 

                    <li> 
                        <a class="dropdown-item text-danger" href="php/logout.php"> 
                            <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión 

                        </a> 
                    </li> 
            </ul> 
        </div> 

    <?php else: ?> 

        <a class="btn btn-outline-primary me-2" href="login.html">Login</a> 
        <a class="btn btn-primary" href="registro.html">Registrarse</a> 

    <?php endif; ?> 
    </div> 

            </div>
        </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button"                  data-bs-target="#carouselExampleFade"               data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ferreteria4.jpg.crdownload" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                     <h5>First slide label</h5>
                     <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
             <div class="carousel-caption d-none d-md-block">
            </div>
            <div class="carousel-item">
                <img src="img/ferreteria5.jpg.crdownload" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                     <h5>First slide label</h5>
                     <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferreteria6.jpg.crdownload" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                     <h5>First slide label</h5>
                     <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"         data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>


            </div>
        </div>
    </div>
    

<div class="row flex-lg-row-reverse align-items-center g-5 py-5 mx-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/Que-son-herramientas-electricas-y-manuales-promaker.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mx-5"> 
        <div class="feature col"> 
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-1 rounded" > 
                <i class="fa-solid fa-screwdriver-wrench icono"></i>
            </div> 
                <h3 class="fs-2 text-body-emphasis">Featured title</h3> 
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> 
                <a href="#" class="icon-link">Call to action
                <svg class="bi" aria-hidden="true">
                    <use xlink:href="#chevron-right"></use>
                </svg>
                </a> 
            </div> 
        <div class="feature col"> 
    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-1 rounded"> 
            <i class="fa-solid fa-brush icono"></i>
        </div> 
     <h3 class="fs-2 text-body-emphasis">Featured title</h3> 
     <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> 
     <a href="#" class="icon-link">Call to action
<svg class="bi" aria-hidden="true">
    <use xlink:href="#chevron-right"></use>
</svg> 
    </a> 
    </div> 
    <div class="feature col"> 
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-1 rounded"> 
                 <i class="fa-solid fa-hammer icono"></i>
        </div> 
        <h3 class="fs-2 text-body-emphasis">Featured title</h3> 
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> 
            <a href="#" class="icon-link">Call to action
    <svg class="bi" aria-hidden="true">
        <use xlink:href="#chevron-right"></use>
    </svg>
    </a>
 </div> 
</div>
  <div class="container"> 
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"> 
            <div class="col-md-4 d-flex align-items-center"> 
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> 
                <svg class="bi" width="30" height="24" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg> 
            </a> 
            <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span> 
        </div> <ul class="nav col-md-4 justify-content-end list-unstyled d-flex"> 
        <li class="ms-3">
            <a class="text-body-secondary" href="#" aria-label="Instagram">
              <i class="fa-brands fa-instagram fs-5"></i>
            </a>
        </li> 
        <li class="ms-3">
            <a class="text-body-secondary" href="#" aria-label="Facebook">
                <i class="fa-brands fa-facebook fs-5"></i>
            </a>
        </li> 
    </ul> 
</footer> 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>