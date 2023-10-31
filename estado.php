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
    <form action="regestado.php">
    <div class="container mt-3">
    
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Usuario" name="usuario">
      </div>
      <div class="col">
        <input type="email" class="form-control" placeholder="Enter email" name="email">
      </div>
    </div>
</div>
<div class="container mt-3">
  <h2>Estado</h2>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="estado[]" value="online">
      <label class="form-check-label" for="check1">Online</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="estado[]" value="cafe">
      <label class="form-check-label" for="check2">Café</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="estado[]" value="coche">
      <label class="form-check-label" for="check2">Se desplaza en coche</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="estado[]" value="nube">
      <label class="form-check-label" for="check2">Trabaja en la nube</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
  </form>
</div>


</body>
</html>