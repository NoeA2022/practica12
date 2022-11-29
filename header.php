<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sistema LOGIN en PHP</title>
</head>
<body style="background:#CCC;">
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"><h3>Práctica Sem-12</h3></a>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">

<li class="nav-item"><a href="register.php" class="btn btn-outline-light">Registrar</a></li>
<li class="nav-item"><a href="index.php?logout='1'" class="btn btn-outline-light ml-3">Cerrar Sesión</a></li>
<li class="nav-item"><a href="view.php" class="btn btn-outline-light ml-3">Ver Registros</a></li>
<li class="nav-item"><p class="text-white" >  Usuario <strong><?php echo $_SESSION['username']; ?> </strong></p></li>

                </ul>
            </div>                

        </div>
    </nav>



    