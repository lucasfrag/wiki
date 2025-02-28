<?php
	$usuario=$_POST["usuario"];
	$senha=$_POST["senha"];

	require("conecta.php"); //Inclui o arquivo para conexão
	conectar_mysql() or die ("Não é possível conectar-se ao servidor.");

	$resultado = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha';");

	if (mysql_num_rows($resultado)<=0) {
          echo"<script language='javascript' type='text/javascript'>alert('Usuário e/ou senha inválidos. Por favor, tente novamente!'); window.location.href='login.php';</script>";
          die();
        } else {
          header("Location: admin/index.php");
        }	