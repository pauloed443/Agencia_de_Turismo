<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Viagem - Agência de Turismo</title>
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

	<form action="" method="POST" name="form_Cadastro">
		<label> OPÇÕES DE VIAGEM: </label></br></br>
		<div class="">
		Opções de local: 
		<select name=""></br>
		<?php 
			$arq = fopen("estados.txt", "r");	//abre o arq para leitura
			$conteudo = fread($arq, filesize("estados.txt"));		//abre o arquivo para leitura, e define o tamanho dele
			$estados = preg_split("/[,]/", "".$conteudo);	//fatia na virgula retornando um array
			fclose($arq);	//fecha o arquivo
			$tamArrayEstados = count($estados);	//retorna a quantidades de posições
			
			for($i=0; $i<$tamArrayEstados; $i++){
				echo '<option value="'.$i.'">'.$estados[$i].'</option></br></br>';
			}
			
		?>
		</select></br>
		
		Opções de transporte: 
		<select name=""></br>
		<?php
			$arq2 = fopen("transportes.txt", "r");
			$conteudo2 = fread($arq2, filesize("transportes.txt"));
			$transportes = preg_split("/[,]/", "".$conteudo2);
			fclose($arq2);
			
			for($i=0 ; $i<count($transportes) ; $i++){
				echo '<option value="'.$i.'">'.$transportes[$i].'</option></br></br>';
			}
		?>
		</select>
		</div>
		
		</br>Hotel:</br>
		<input type="radio" name="hotel"value="✭">✭</br>
		<input type="radio" name="hotel"value="✭✭">✭✭</br>
		<input type="radio" name="hotel"value="✭✭✭">✭✭✭</br>
		<input type="radio" name="hotel"value="✭✭✭✭">✭✭✭✭</br>
		<input type="radio" name="hotel"value="✭✭✭✭✭">✭✭✭✭✭</br></br>
		
		<label>Diárias</label>
		<input type="text" name="Diárias" placeholder="Quantidade de dias"></br></br>
		
		Translado: 
		<input type="radio" name="translado"value="Sim">Sim
		<input type="radio" name="translado"value="Não">Não</br></br>
		
		Passeio: </br>
		<textarea name="Comment" rows="6" cols="50"> </textarea></br></br>
		
		<input type="submit" value="Ok">
		<label><a href="viagens-sonhos.html">Viagem dos Sonhos</a></label>
	</form>

</body>
</html>