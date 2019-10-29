<?php
$diretorioDeImagens = $_SERVER["DOCUMENT_ROOT"].'/imagens/';
    $caminhoTemporario = $_FILES['imagens']['tmp_name']; 
    $caminhoDefinitivo = $diretorioDeImagens . basename($_FILES['imagens']['name']);

    if (move_uploaded_file($caminhoTemporario, $caminhoDefinitivo)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Erro ao armazenar o arquivo.\n";
    }
    ?>