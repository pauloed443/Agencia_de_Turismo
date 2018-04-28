<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset = "utf-8">
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
	<title>Informações - Agência de Turismo MiniAgua</title>
	<link rel = "stylesheet" type = "text/css" href="lala.css">
	
</head>
<body>
	<?php
    
        $_nome = $_POST["Nome"];
        $_sobrenome = $_POST["Sobrenome"];
        $_endereco = $_POST["Endereco"];
        $_fone = $_POST["Fone"];
        $_rg = $_POST["RG"];
        $_cpf = $_POST["CPF"];
        $_login = $_POST["Login"];
        $_senha = $_POST["Senha"];
        
    $arq = fopen("cadastro.txt", "w");  //abre o arquivo somente para gravação
    $escreve = fwrite($arq, "".'"'.$_nome.'"');    //gravando no txt
    $escreve = fwrite($arq, ",".'"'.$_sobrenome.'"');    //gravando no txt
    $escreve = fwrite($arq, ",".$_endereco);    //gravando no txt
    $escreve = fwrite($arq, ",".$_fone);    //gravando no txt
    $escreve = fwrite($arq, ",".$_rg);    //gravando no txt
    $escreve = fwrite($arq, ",".$_cpf);    //gravando no txt
    $escreve = fwrite($arq, ",".$_login);    //gravando no txt
    $escreve = fwrite($arq, ",".$_senha);    //gravando no txt
    fclose($arq);   //fecha o arquivo
    
        echo'<form class="container" action="" method="POST">';
    
		echo'<div><img src="1.jpg" width="80px" height="80px"></div>';
    
		echo'<label name="nome">Nome Completo: </label>';
		echo'<input type="text" name="Nome Completo" value="'.$_nome.' '.$_sobrenome.'" disabled></br></br>';
        
		echo'<label name="endereco">Endereço: </label>';
		echo'<input type="text" name="Endereço" value="'.$_endereco.'" disabled></br></br>';
		
		echo'<label name="fone">Fone: </label>';
		echo'<input type="text" name="Fone" value="'.$_fone.'" disabled></br></br>';
		
		echo'<label name="rg">RG: </label>';
		echo'<input type="text" name="RG" value="'.$_rg.'" disabled></br></br>';
		
		echo'<label name="cpf">CPF: </label>';
		echo'<input type="text" name="CPF" value="'.$_cpf.'"disabled></br></br>';
		
		echo'<label name="login">Login: </label>';
		echo'<input type="text" name="Login" value="'.$_login.'" disabled></br></br>';
		
		echo'<label name="senha">Senha: </label>';
		echo'<input type="password" name="Senha" value="'.$_senha.'" disabled></br></br>';
	    echo'</form>';
    ?>
		
	
</body>

</html>