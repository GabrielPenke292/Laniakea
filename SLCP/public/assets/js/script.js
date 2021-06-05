function mostra_cidades(){
    uf = $("#uf").val();

    // console.log(uf);

    $.ajax({
        type: "get",
        url: "get-cidades-by-uf",
        data: {uf},
        dataType: "json",
        success: function (response) {
            carregaCidades(response);
        }
    });
}

function carregaCidades(data){
    
    data.forEach(cidade => {
        console.log(cidade)
        let option = document.createElement("option");
        option.text = document.createTextNode(cidade["CIDADE_NOME"]);
        
        function inicia(){
            // document.getElementById("#city").appendChild(node);
            let select = $("#city");
            select.appendChild(option);
        }

        window.addEventListener("load", inicia);
    });
}