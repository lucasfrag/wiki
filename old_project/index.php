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
<center>
<div id="container">
	<h1>Welcome!</h1>
	<hr color="white" width="10%" align="left" size="7">
	
	<!--Adquirir informações sobre o servidor e o usuário-->
	<?php 
	$ip = $_SERVER["REMOTE_ADDR"]; // IP do usuário
	$server = $_SERVER["SERVER_SOFTWARE"]; // Informações sobre o servidor
	echo ("<p><i>Bem-vindo ao servidor ".$server."</i><br>Seu IP é <b>".$ip."</b></p>"); 
	?>
	
	<br>
	<a href="login.php"><button style="background-color: black; color: white; width: 100px; height: 30px; font-size: 16px">Login</button></a>
	<br>

	<br>
	<h2>Desenvolvimento</h2><br>
	<div id="option"><a href="java.php" style="text-decoration: none;"><img src="css/icons/java.svg" height="100px"><br>Java</a></div>
	<div id="option"><a href="html.php" style="text-decoration: none;"><img src="css/icons/html.svg" height="100px"><br>HTML</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/css.svg" height="100px"><br>CSS</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/javascript.svg" height="100px"><br>JavaScript</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/php.svg" height="100px"><br>PHP</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/mysql.svg" height="100px"><br>SQL</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/visualstudio.svg" height="100px"><br>Visual Studio</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/python.svg" height="100px"><br>Python</a></div>
	<br><br>

	<h2>Hacking</h2><br>
	<div id="option"><a href="kali.php" style="text-decoration: none;"><img src="css/icons/kali.png" height="100px"><br>Kali Linux</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/google.png" height="65px"><br>Google Hacking</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/social.png" height="65px"><br>Engenharia Social</a></div>
	<br><br>

	<h2>Sistemas Operacionais</h2><br>
	<div id="option"><a href="windows.php" style="text-decoration: none;"><img src="css/icons/windows.svg" height="100px"><br>Windows</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/linux.svg" height="100px"><br>Linux</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/ios.svg" height="100px"><br>OSX</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/android.svg" height="100px"><br>Android</a></div>
	<br><br>

	<h2>Outros</h2><br>
	<div id="option"><a href="github.php" style="text-decoration: none;"><img src="css/icons/github.svg" height="100px"><br>GitHub</a></div>
	<div id="option"><a href="wait.php" style="text-decoration: none;"><img src="css/icons/virtualbox.svg" height="100px"><br>Virtualização</a></div>
	<br><br>

	<!--Sugestões-->
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
	<br><br><br>	
</div>
</center>
<!--Fim do conteúdo-->


</body>
</html>