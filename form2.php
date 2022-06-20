<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_form2.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	<div id="site">
		<form method="post" action="form3.php">
			<div id="escolaridade">
				<h1>Escolaridade</h1>
				<div id="escola_1">
					<p>Nome da escola: <input type="text" name="nome_escola1" id="campo_texto_g"></p>
					<p> Nível:
						<select name="nivel_escola1">
							<option value="Ensino Fundamental I">Ensino Fundamental I</option>
							<option value="Ensino Fundamenta II">Ensino Fundamental II</option>
							<option value="Ensino Médio">Ensino Médio</option>
							<option value="Ensino Técnico">Ensino Técnico</option>
							<option value="Ensino Superior">Ensino Superior</option>
						</select>
					</p>
					<p>Ano de conclusão: <input type="month" name="ano_escola1" id="campo_data"></p>
				</div>
				<div id="escola_2">
					<p>Nome da escola: <input type="text" name="nome_escola2" id="campo_texto_g"></p>
					<p> Nível:
						<select name="nivel_escola2">
							<option value="Ensino Fundamental I">Ensino Fundamental I</option>
							<option value="Ensino Fundamenta II">Ensino Fundamental II</option>
							<option value="Ensino Médio">Ensino Médio</option>
							<option value="Ensino Técnico">Ensino Técnico</option>
							<option value="Ensino Superior">Ensino Superior</option>
						</select>
					</p>
					<p>Ano de conclusão: <input type="month" name="ano_escola2" id="campo_data"></p>
				</div>
				<div id="escola_3">
					<p>Nome da escola: <input type="text" name="nome_escola3" id="campo_texto_g"></p>
					<p> Nível:
						<select name="nivel_escola3">
							<option value="Ensino Fundamental I">Ensino Fundamental I</option>
							<option value="Ensino Fundamenta II">Ensino Fundamental II</option>
							<option value="Ensino Médio">Ensino Médio</option>
							<option value="Ensino Técnico">Ensino Técnico</option>
							<option value="Ensino Superior">Ensino Superior</option>
						</select>
					</p>
					<p>Ano de conclusão: <input type="month" name="ano_escola3" id="campo_data"></p>
				</div>
			</div>
			<div id="exp_profissional">
				<h1>Experiência Profissional</h1>
				<div id="exp_pro1">
					<p>Nome da Empresa <input type="text" name="nome_exp1" id="campo_texto_g"></p>
					<p>Cargo <input type="text" name="cargo_exp1" id="campo_texto_m"></p>
					<p>Tempo de Serviço:
						Inicio: <input type="month" name="inicio_exp1" id="campo_data">
						Saída: <input type="month" name="fim_exp1" id="campo_data"></p>
				</div>
				<div id="exp_pro2">
					<p>Nome da Empresa <input type="text" name="nome_exp2" id="campo_texto_g"></p>
					<p>Cargo <input type="text" name="cargo_exp2" id="campo_texto_m"></p>
					<p>Tempo de Serviço:
						Inicio: <input type="month" name="inicio_exp2" id="campo_data">
						Saída: <input type="month" name="fim_exp2" id="campo_data"></p>
				</div>
				<div id="exp_pro3">
					<p>Nome da Empresa <input type="text" name="nome_exp3" id="campo_texto_g"></p>
					<p>Cargo <input type="text" name="cargo_exp3" id="campo_texto_m"></p>
					<p>Tempo de Serviço:
						Inicio: <input type="month" name="inicio_exp3" id="campo_data">
						Saída: <input type="month" name="fim_exp3" id="campo_data"></p>
				</div>
			</div>
			<input type="submit" id="botao_enviar">
		</form>
		<?php 
			if( isset($_POST['nome_escola1']) && isset($_POST['nivel_escola1']) && isset($_POST['ano_escola1']) && isset($_POST['nome_escola2']) && isset($_POST['nivel_escola2']) && isset($_POST['ano_escola2']) && isset($_POST['nome_escola3']) && isset($_POST['nivel_escola3']) && isset($_POST['ano_escola3']) && isset($_POST['nome_exp1']) && isset($_POST['cargo_exp1']) && isset($_POST['inicio_exp1']) && isset($_POST['fim_exp1']) && isset($_POST['nome_exp2']) && isset($_POST['cargo_exp2']) && isset($_POST['inicio_exp2']) && isset($_POST['fim_exp2']) && isset($_POST['nome_exp3']) && isset($_POST['cargo_exp3']) && isset($_POST['inicio_exp3']) && isset($_POST['fim_exp3'])){

				$_SESSION['nome_escola1'] = $_POST['nome_escola1'];
				$_SESSION['nivel_escola1'] = $_POST['nivel_escola1'];
				$_SESSION['ano_escola1'] = $_POST['ano_escola1'];
				
				$_SESSION['nome_escola2'] = $_POST['nome_escola2'];
				$_SESSION['nivel_escola2'] = $_POST['nivel_escola2'];
				$_SESSION['ano_escola2'] = $_POST['ano_escola2'];
				
				$_SESSION['nome_escola3'] = $_POST['nome_escola3'];
				$_SESSION['nivel_escola3'] = $_POST['nivel_escola3'];
				$_SESSION['ano_escola3'] = $_POST['ano_escola3'];	

				$_SESSION['nome_exp1']	= $_POST['nome_exp1'];
				$_SESSION['cargo_exp1']	= $_POST['cargo_exp1'];
				$_SESSION['inicio_exp1'] = $_POST['inicio_exp1'];
				$_SESSION['fim_exp1'] = $_POST['fim_exp1'];	

				$_SESSION['nome_exp2']	= $_POST['nome_exp2'];
				$_SESSION['cargo_exp2']	= $_POST['cargo_exp2'];
				$_SESSION['inicio_exp2'] = $_POST['inicio_exp2'];
				$_SESSION['fim_exp2'] = $_POST['fim_exp2'];	

				$_SESSION['nome_exp3']	= $_POST['nome_exp3'];
				$_SESSION['cargo_exp3']	= $_POST['cargo_exp3'];
				$_SESSION['inicio_exp3'] = $_POST['inicio_exp3'];
				$_SESSION['fim_exp3'] = $_POST['fim_exp3'];	
			} 
		?>
	</div>
</body>
</html>