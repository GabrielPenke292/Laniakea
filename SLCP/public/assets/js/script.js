function mostra_cidades(){
    uf = $("#uf").val();

    // console.log(uf);

    $.ajax({
        type: "get",
        url: "get-cidades-by-uf",
        data: {uf},
        dataType: "html",
        success: function (response) {
            // carregaCidades(response);
           $("#city").find('option').remove();
           $("#city").html(response);
        }
    });
}

function carregaCidades(data){
    console.log(data[0]['CIDADE_NOME']);
    let cidade = data[0]['CIDADE_NOME'];
    let option = document.createElement("option");
    option.text = document.createTextNode(cidade);

    function inicia(){
        // document.getElementById("#city").appendChild(node);
        let select = $("#city");
        select.appendChild(option);
        console.log('iniciou')
    }

        window.addEventListener("load", inicia);


    // data.forEach(cidade => {
    //     // console.log(cidade)
    //     let option = document.createElement("option");
    //     option.text = document.createTextNode(cidade["CIDADE_NOME"]);
        
    //     function inicia(){
    //         // document.getElementById("#city").appendChild(node);
    //         let select = $("#city");
    //         select.appendChild(option);
    //     }

    //     window.addEventListener("load", inicia);
    // });
}