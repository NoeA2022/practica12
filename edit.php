<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Debes iniciar sesión primero";
        header('location: login.php');
    }
?>

<?php 

    require_once("conexion.php");
    $UserID = $_GET['GetID'];
    $query = " select * from users where id='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $UserName = $row['username'];
        $UserMail = $row['email'];
        $UserClave = $row['password'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
<h3 class="bg-success text-white text-center py-3"> Actualizar Usuario</h3>
                        </div>
                        <div class="card-body">

<form action="update.php?ID=<?php echo $UserID ?>" method="post">
<input type="text" class="form-control mb-2" placeholder=" Nombre de Usuario " name="name" value="<?php echo $UserName ?>">
<input type="email" class="form-control mb-2" placeholder=" Correo Electrónico " name="mail" value="<?php echo $UserMail ?>">
<input type="text" class="form-control mb-2" placeholder=" Passsword " name="password" value="<?php echo $UserClave ?>">
<button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>



