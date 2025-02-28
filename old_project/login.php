<!--EDITAR PÁGINA-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="Shortcut Icon" type="image/png" href="css/icons/icon.png">
</head>
<body>

<!--Header Begins-->
	<!--Área de fundo com Wallpaper-->
	<div id="bg">
		<img src="css/images/screamer.png" height="200px" style="position: absolute; right: 0px; top: -10px;">
		<img src="css/images/login.png" height="200px" style="position: absolute; right: 8px; top: 0px;">
		<img src="css/images/crazy.png" height="280px" style="position: absolute; left: -120px; top: -50px;">
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

<!--Início do conteúdo-->

<!--Botão de retorno-->
<div style="width: 250px; height: 50px; position: absolute; top: 250px; left: 10px">
	<a href="index.php" style="color: black">
		<img src="css/icons/back.png" style="width:30px; height: 30px; float: left;">
		<hr color="white" width="10%" align="left" size="5">
		<p style="font-size: 18px;"> &nbspPágina Anterior</p>
	</a>
</div>

<center>
	<img src="css/images/anonymous.png" height="150px"><br>
	
	<h2>Acesso Restrito</h2><br>

	<form method="POST" action="valida_login.php">
		<input required type="" name="usuario" placeholder="Usuário" style="width: 300px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		<input required type="" name="senha" placeholder="Senha" style="width: 300px; height: 20px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px;"><br><br>
		<button style="color: #333; background-color: #ebebeb; border-color: #adadad; display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: normal;user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;">Login</button>
	</form>
</center>

<br><br><br><br><br><br>

</body>
</html>