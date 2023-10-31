<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Link1</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Primer Link</a></li>
                    <li><a class="dropdown-item" href="#">Segundo link</a></li>
                    <li><a class="dropdown-item" href="#">tercer link</a></li>
                </ul>
            </li> 
        </li>
        <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Link2</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Primer Link</a></li>
                    <li><a class="dropdown-item" href="#">Segundo link</a></li>
                    <li><a class="dropdown-item" href="#">tercer link</a></li>
                </ul>
            </li> 
        </li>
        <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Link3</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Primer Link</a></li>
                    <li><a class="dropdown-item" href="#">Segundo link</a></li>
                    <li><a class="dropdown-item" href="#">tercer link</a></li>
                </ul>
            </li> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="organigrama.php">Organigrama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="quienessomos.php">Quienes somos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="estado.php">Formulario estado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="prueba.php">Inicio</a>
        </li>
        </ul>
      
    </div>
    </div>
    </nav> 
    <div class="container" style="margin-top:20px">
<!-- Carousel -->
<div id="demo" class="carousel slide " data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active " >
      <img src="oficina.jpg" alt="Oficina" class="d-block" style="width:100% ;height:500px" >
    </div>
    <div class="carousel-item">
      <img src="proyectos.jpg" alt="proyectos" class="d-block" style="width:100%;height:500px" >
    </div>
    <div class="carousel-item">
      <img src="edificio.jpg" alt="edificio" class="d-block" style="width:100%;height:500px" >
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

<div class="container-fluid mt-3 d-flex justify-content-center" >
  <h3>Nuestra empresa</h3>
  
</div>

</body>
</html>
