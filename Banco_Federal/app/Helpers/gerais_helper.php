<?php 

function renomeiaArquivo($arquivo, $identidade, $tipo){
    
    $novo_nome = "";

    if($tipo == "residencia"){
        $novo_nome = "COMP_RESIDENCIA_".$identidade;
        
    }else if($tipo == "renda"){
        $novo_nome = "COMP_RENDA_".$identidade;
        
    }else if($tipo == "identidade"){
        $novo_nome = "COPIA_IDENTIDADE_".$identidade;

    }
    return $novo_nome;
}

