
<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
// examine como foi implementado a alteração da tb_aluno
// para implementar a alteração a sugestão é receber apenas o "id"
// use a função recupera_curso($id) que deve ser criada dentro do arquivo /inc/funcoes.inc.php

 //$id = $_GET["id"];
 //$curso = urldecode($_GET["curso"]);

 include "../inc/conectabd.inc.php";
 include "../inc/funcoes.inc.php";

 $id = $_GET["id"];
 $cr = recupera_curso($id);
 


?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar curso</h1>
		<form action="alteracao_curso.php" 
		      method="GET">
			  
			<input type="hidden" name="id" value="<?php echo $cr["id_curso"];?>">
			<label for="ds_curso">
			Curso:
			</label>
			<input type="text" name="curso" id="ds_curso" value="<?php echo $cr["ds_curso"];?>">
			<br>
			<label for="carga_horaria">
			Carga Horaria
			</label>
			<input type="text" name="carga_horaria" id="carga_horaria" value="<?php echo $cr["nr_carga_horaria"];?>" >
			<br>
			<label for="data_inicio">
			Data de Inicio
			</label>
			<input type="text" name="data_inicio" id="data_inicio" value="<?php echo $cr["dt_inicio"];?>" >
			<input type="submit" value="Ok">
			


		</form>
	</body>
</html>