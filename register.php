<?php include('server.php') ?>

<?php require_once('header.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
<h3 class="bg-success text-white text-center py-3"> Formulario de Registro</h3>
                        </div>
                        <div class="card-body">

<form action="register.php" method="post">
<?php include('errors.php'); ?>

<label>Username:</label>
    <input type="text" class="form-control mb-2" placeholder=" Nombre de Usuario " name="username"  value="<?php echo $username; ?>">

<label>Correo Electrónico:</label>
    <input type="email" class="form-control mb-2" placeholder=" Correo Electrónico " name="email" value="<?php echo $email; ?>">

<label>Contraseña:</label>
    <input type="text" class="form-control mb-2" placeholder=" Contraseña " name="password_1">

<label>Confirmar Contraseña:</label>
    <input type="text" class="form-control mb-2" placeholder=" Repite la Contraseña " name="password_2">

<button class="btn btn-primary" name="reg_user">Registro</button>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php require_once('footer.php'); ?>




