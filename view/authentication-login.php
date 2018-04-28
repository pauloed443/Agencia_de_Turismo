<?php

    $_login = $_POST["email"];
    $_senha = $_POST["senha"];
    
    $arq = fopen("cadastro.txt", "r");    //abre o arquivo txt em modo de leitura
    $conteudo = fread($arq, filesize("cadastro.txt"));
    $campos = preg_split("/[,]/", "".$conteudo);    //fatia na virgula e retorna um array
    fclose($arq);   //fecha o arquivo aberto
    
    if($_login == $campos[6] && $_senha == $campos[7]){     //verifica se os campos são iguais
        header("Location: Tela-Viagem.php");
    } else {
        header("Location: index.html");
    }
    
    //print_r($campos);

?>