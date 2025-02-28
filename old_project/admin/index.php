<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="Shortcut Icon" type="image/png" href="../css/icons/icon.png">
</head>
<body>

<!--Header Begins-->
	<!--Área de fundo com Wallpaper-->
	<div id="bg">
		<img src="../css/images/screamer.png" height="200px" style="position: absolute; right: 0px; top: -10px;">
		<img src="../css/images/login.png" height="200px" style="position: absolute; right: 8px; top: 0px;">
		<img src="../css/images/crazy.png" height="280px" style="position: absolute; left: -120px; top: -50px;">
	</div>

	<!--Barra escura-->
	<div id="bar">
		<hr color="black" width="10%" align="left" size="12">
		<div style="position: absolute; left: 5%;">Bem-vindo, Mestre!</div>
	</div>

	<!--Imagem central-->
	<div id="header"></div>

	<!--Pela divs anteriores serem Position Absolute, as quebras de linhas abaixo ajustarão a exibição do conteúdo-->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--Header Ends-->

<!--Botão de retorno-->
<div style="width: 250px; height: 50px; position: absolute; top: 250px; left: 10px">
	<a href="../index.php" style="color: black">
		<img src="../css/icons/back.png" style="width:30px; height: 30px; float: left;">
		<hr color="white" width="10%" align="left" size="5">
		<p style="font-size: 18px;"> &nbspPágina Anterior</p>
	</a>
</div>

<!--Início do conteúdo-->

<!--Sugestões-->
<br>
<center>
	<h2>Cadastrar Postagem</h2><br>

	<form action="inserir.php" method="POST">
		<input required name="titulo" placeholder="Título (Ex.: Tutorial da Wiki)" style="width: 300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;">

		<input required name="formato" placeholder="Formato (Ex.: css/filetype/pdf.svg)" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>

		<select name="linguagem" style="width: 325px; height: 32px; padding: 6px 12px; font-size: 13px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;">

			<?php
				require("conecta.php");
				conectar_mysql() or die ("Não é possível conectar-se ao servidor.");

				// Converter caracteres especiais para UTF-8
				mysql_query("SET NAMES 'utf8'");
		    	mysql_query('SET character_set_connection=utf8');
		    	mysql_query('SET character_set_client=utf8');
		    	mysql_query('SET character_set_results=utf8');

				$resultado = mysql_query("SELECT * FROM linguagens ORDER BY nomeL") or die ("Não é possível consultar linguagens.");
				while ($linha=mysql_fetch_array($resultado)) {
					$idL=$linha["idL"];
					$nomeL=$linha["nomeL"];
					print("<option value='$idL'>$nomeL</option>");
				}
			?>

		</select>

		<select name="categoria" style="width: 325px; height: 32px; padding: 6px 12px; font-size: 13px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;">

			<?php
				$resultado = mysql_query("SELECT * FROM categorias ORDER BY nomeC") or die ("Não é possível consultar linguagens.");
				// Converter caracteres especiais para UTF-8
				mysql_query("SET NAMES 'utf8'");
		    	mysql_query('SET character_set_connection=utf8');
		    	mysql_query('SET character_set_client=utf8');
		    	mysql_query('SET character_set_results=utf8');

				while ($linha=mysql_fetch_array($resultado)) {
					$idC=$linha["idC"];
					$nomeC=$linha["nomeC"];
					print("<option value='$idC'>$nomeC</option>");
				}
			?>
			
		</select><br><br>

		<!--<input required name="linguagem" placeholder="Linguagem (Ex.: Java)" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		
		<input required name="categoria" placeholder="Categoria (Ex.: Tutorial, Downloads, Extras, Videos)" style="width: 300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"> -->


		<input required name="conteudo" placeholder="Conteúdo" style="width: 630px; height: 74px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>

		<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Cadastrar Conteúdo!</button>
	</form>
	<br><br>

	<!--Alterar Postagens-->
	<div id="option">
		<h2>Alterar Postagens</h2><br>
		<form method="GET" action="alteracao.php">
			<input required name="id" placeholder="Informe o código da postagem" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px; text-align: center;"><br><br>
			<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Alterar Postagem</button>
		</form>
		<br><br>
	</div>
	<!--Excluir Postagens-->
	<div id="option">
	<h2>Excluir Postagens</h2><br>
	<form method="GET" action="deleta_postagem.php">
		<input required name="id" placeholder="Informe o código da postagem" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px; text-align: center;"><br><br>
		<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Excluir Postagem</button>
	</form>
	<br><br>
	</div>
</center>



<center><h2>Sugestões</h2><br><br></center>

<div style="width: 100%; height: 100%;">

<?php
		// Converter caracteres especiais para UTF-8
		mysql_query("SET NAMES 'utf8'");
    	mysql_query('SET character_set_connection=utf8');
    	mysql_query('SET character_set_client=utf8');
    	mysql_query('SET character_set_results=utf8');


		//Recebe os dados do banco de dados
		$resultado = mysql_query("SELECT * FROM sugestoes;");

		print("<center>");
		print("<table>");
		print("<tr><td style='width: 20px'><b>ID</td>");
		print("<td style='width: 150px'><b>Título</td>");
		print("<td style='width: 300px'><b>Descrição</td>");
		print("<td style='width: 100px' align=center><b>Categoria</td>");
		print("<td style='width: 120px;' align=center><b>Deletar</td></tr>");
		print("<tr><td></td>");
		print("<td></td>");
		print("<td></td>");
		print("<td></td>");
		print("<td></td>");

		while ($linha=mysql_fetch_array($resultado)) {
			$id=$linha["id"];
			$titulo=$linha["titulo"];
			$descricao=$linha["descricao"];
			$categoria=$linha["categoria"];

			print("<tr><td>$id</td>");
			print("<td>$titulo</td>");
			print("<td>$descricao</td>");
			print("<td align=center>$categoria</td>");
			print("<td align=center><a href='deleta_sugestao.php?id=$id'><img src='../css/icons/delete.png' style='width:30px'></a></form></td>");
			}
		print("</table></center>");
?>
</div>
<br><br><br>
				
<!--Fim do conteúdo-->

<!--Sugestões-->
	<center>
	<form action="sugestao.php" method="POST">
		<h2>Envie Sugestões</h2>
		<br>

		<!--Titulo-->
		<input required type="" name="titulo" placeholder="Título" style="width: 300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;">
		
		<!--Categoria-->
		<input required type="" name="categoria" placeholder="Categoria" style="width:300px; height: 15px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		
		<!--Descrição-->
		<input required type="" name="descricao" placeholder="Descrição" style="width: 630px; height: 74px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		
		<!--Enviar-->
		<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Enviar Sugestão!</button>
	</form>
	</center>
	<br><br><br>
<!-- Sugestões Ends -->


</body>
</html>