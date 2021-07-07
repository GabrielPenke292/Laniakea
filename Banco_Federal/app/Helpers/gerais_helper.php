<?php 

function renomeiaArquivo($arquivo, $tipo){
    
    $novo_nome = "";

    if($tipo == "residencia"){
        $novo_nome = "COMP_RESIDENCIA_";
        
    }else if($tipo == "renda"){
        $novo_nome = "COMP_RENDA_";
        
    }else if($tipo == "identidade"){
        $novo_nome = "COPIA_IDENTIDADE_";

    }
    return $novo_nome;
}

