<?php
	function conectar_mysql() {
		
		//Informações da base de dados
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "wiki";
		
		//Conexão ao banco de dados
		$link = mysql_connect($host, $user, "");
		if ($link && mysql_select_db($database))
			return($link);
		return(FALSE);
	}
?>