<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Debes iniciar sesión primero";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>

<?php require_once('header.php'); ?>
    <h4 class="display-4 text-center mt-5">Página de Inicio</h4>

	<div class="header">
		<h2>Página de inicio</h2>
	</div>
	<div class="content">

		<!-- mensaje de notificación-->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- registrado en la información del usuario -->
		<?php  if (isset($_SESSION['username'])) : ?>
	<p>Bienvenido <strong><?php echo $_SESSION['username']; ?> </strong></p>
	<p><a href="index.php?logout='1'" style="color: red;"> cerrar sesión</a> </p>
		<?php endif ?>
	</div>
		

<?php require_once('footer.php'); ?>




