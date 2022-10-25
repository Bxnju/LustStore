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
		<a href="ingresado.php">Home</a>
		<a href="clientes.php">Clientes</a>
		<a href="pedidos.php">Pedidos</a>
		<a href="productos.php">Productos</a>
		<a href="../query/logout.php">Logout</a>
	</div>
</nav>
