<header>
	<h3>Bienvenido al sistema: <strong>
		
		<?php 

		session_start();

		echo $_SESSION['user_admin'];

		 ?>

	</strong></h3>
</header>

<nav>
	<div class="logo">
		<img src="../imgs/logo.png" draggable="false">
	</div>
	<div class="links">
		<a href="index.php">Home</a>
		<a href="catalogo.php">Usuarios</a>
		<a href="nosotros.php">Pedidos</a>
		<a href="contactanos.php">Productos</a>
		<a href="../query/logout.php">Logout</a>
	</div>
</nav>
