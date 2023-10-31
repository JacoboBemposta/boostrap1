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
<div class="container mt-3">
  <h2>Organigrama</h2>
  
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Departamento</th>
        <th>Nombre</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Director</td>
        <td>Jacobo Bemposta</td>
        <td>Jacobo@gmail.com</td>
      </tr>
      <tr>
        <td>Ventas</td>
        <td>María Pérez</td>
        <td>maria@gmail.com</td>
      </tr>
      <tr>
        <td>Producción</td>
        <td>Bárbara Langueiro</td>
        <td>Barbara@gmail.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>