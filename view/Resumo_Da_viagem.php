<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset = "utf-8">
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
	<title>Resumo da viagem</title>
	
</head>
<body>
	<?php
    
        $_destino = $_POST["Destino"];
        $_transporte = $_POST["Transporte"];
        $_hotel = $_POST["Hotel"];
        $_diarias = $_POST["Diarias"];
        $_translado = $_POST["Translado"];
        $_passeio = $_POST["Passeio"];
        
    $arq = fopen("estados.txt", "w");  //abre o arquivo somente para gravação
    $escreve = fwrite($arq, "".'"'.$_destino.'"');    //gravando no txt
    fclose($arq);   //fecha o arquivo
	
	$arq = fopen("transportes.txt", "w");  //abre o arquivo somente para gravação
    $escreve = fwrite($arq, "".'"'.$_transporte.'"');    //gravando no txt
    fclose($arq);   //fecha o arquivo
    
        echo'<form class="container" action="" method="POST">';
    
		echo'<label name="destino">Destino: </label>';
		echo'<input type="text" name="Destino" value="'.$_destino.'" disabled></br></br>';
        
		echo'<label name="transporte">Transporte: </label>';
		echo'<input type="text" name="Transporte" value="'.$_transporte.'" disabled></br></br>';
		
		echo'<label name="hotel">Hotel: </label>';
		echo'<input type="text" name="Hotel" value="'.$_hotel.'" disabled></br></br>';
		
		echo'<label name="diarias">Diarias: </label>';
		echo'<input type="text" name="Diarias" value="'.$_diarias.'" disabled></br></br>';
		
		echo'<label name="translado">Translado: </label>';
		echo'<input type="text" name="Translado" value="'.$_translado.'"disabled></br></br>';
		
		echo'<label name="passeio">Passeio: </label>';
		echo'<input type="text" name="Passeio" value="'.$_passeio.'" disabled></br></br>';
	    echo'</form>';
    ?>
		
	
</body>

</html>