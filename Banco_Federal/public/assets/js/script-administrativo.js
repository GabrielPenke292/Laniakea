const BASE_URL = "http://localhost/meus-projetos/Laniakea/Banco_Federal/public/";

function openAccount(){
    

    let nome = $("#nome").val();
    let identidade = $("#intentidade").val();
    let endereco = $("#endereco").val();
    let cidade = $("#cidade").val();
    let uf = $("#uf").val();
    let ocupacao = $("#ocupacao").val();
    let salario = $("#salario").val();
    let comprovanteResidencia = $("#comprovanteResidencia").val();
    let copiaIdentidade = $("#copiaIdentidade").val();
    let comprovanteRenda = $("#comprovanteRenda").val();


    $.ajax({
        type: "post",
        url: BASE_URL + "administrativo/abrirConta",
        data: {
            nome,
            identidade,
            endereco,
            cidade,
            uf,
            ocupacao,
            salario,
            comprovanteResidencia,
            copiaIdentidade,
            comprovanteRenda,
        },
        dataType: "dataType",
        success: function (response) {
            console.log(response)
        }
    });
}