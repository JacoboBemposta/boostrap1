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


    <?php 
$usuario = "";
$email = "";
$estado;

if (isset($_GET['usuario'])) $usuario = $_GET['usuario'];
if (isset($_GET['email'])) $email = $_GET['email'];
if (isset($_GET['estado'])) $estado = $_GET['estado'];


if($usuario && $email) {
    
        echo ' <ul class="list-group">
        <li class="list-group-item">Usuario; '.$usuario.'</li>
        <li class="list-group-item">Email: '.$email.'</li>';
        if($estado){
            foreach ($estado as $key => $value) {
                switch ($value) {
                    case 'online':
                        echo '<li class="list-group-item "><img src="online.jpg"  class="img-thumbnail" alt="Cinque Terre" width="30px" heigth="30px" > Estado Online </li> ';
                        break;
                    case 'cafe':
                        echo '<li class="list-group-item "> <img src="cafe.jpg" class="img-thumbnail" alt="Cinque Terre" width="30px" heigth="30px" >Está tomando café </li> ';
                        break;    
                    case 'coche':
                        echo '<li class="list-group-item "><img src="coche.jpg" class="img-thumbnail" alt="Cinque Terre" width="30px" heigth="30px" > Se desplaza en coche </li> ';
                        break;
                    case 'nube':
                        echo '<li class="list-group-item "><img src="nube.jpg" class="img-thumbnail" alt="Cinque Terre" width="30px" heigth="30px" > Trabaja en la nube </li> ';
                        break;    
                    default:
                        # code...
                        break;
                }
                
            }
        }
      '</ul> ';
        }

    ?>
        
</body>
</html>