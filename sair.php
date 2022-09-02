<?php
	$_SESSION['usuario'] = $usuarioAlu;
	$_SESSION['senha'] = $senhaAlu;
	header('location: login.php');
?>