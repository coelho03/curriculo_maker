<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_form1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	<div id="site">
		<form method="post" action="form2.php" enctype="multipart/form-data">
			<div id="info_pessoal">
				<p>Nome: <input type="text" name="nome" id="campo_texto_g"></p>
				<p>Data de nascimento: <input type="date" name="data_nascimento" id="data_nasc"></p>
				<p>Sexo: 
					<input type="radio" name="sexo" id="radio_opt" value="Feminino">Feminino
					<input type="radio" name="sexo" id="radio_opt" value="Masculino">Masculino
				</p>
				<p>Endereço:<input type="text" name="endereco" id="campo_texto_g"></p>
				<p>Email: <input type="email" name="email" id="campo_texto_m"></p>
				<p>Telefone: 
					<input type="number" name="telefone" id="campo_texto_m" placeholder="(XX) XXXXX-XXXX">
					<input type="radio" name="whatsapp" value="Sim">Sim
					<input type="radio" name="whatsapp" value="Não">Não
				</p>
			</div>
			<div id="campos_grandes">
				<input type="file" name="arquivo" id="campo_foto">
				<textarea name="biografia" maxlength="400" cols="30" rows="10" placeholder="Me fale sobre você..."></textarea>
			</div>
			<input type="submit" id="botao_enviar" value="ENVIAR">
		</form>
	</div>
	<?php 
		if(isset($_POST['nome']) && isset($_POST['data_nascimento']) && isset($_POST['sexo']) && isset($_POST['endereco']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['whatsapp']) && isset($_POST['biografia'])){
			$_SESSION['nome'] = $_POST['nome'];
			$_SESSION['data_nascimento'] = $_POST['data_nascimento'];
			$_SESSION['sexo'] = $_POST['sexo'];
			$_SESSION['endereco'] = $_POST['endereco'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['telefone'] = $_POST['telefone'];
			$_SESSION['whatsapp'] = $_POST['whatsapp'];
			$_SESSION['biografia'] = $_POST['biografia'];
		}
	?>
</body>
</html>