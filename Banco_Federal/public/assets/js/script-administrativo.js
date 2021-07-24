const BASE_URL = "http://localhost/meus-projetos/Laniakea/Banco_Federal/public/";

function openAccount(){
    

    let nome = $("#nome").val();
    let identidade = $("#intentidade").val();
    let endereco = $("#endereco").val();
    let cidade = $("#cidade").val();
    let uf = $("#uf").val();
    let ocupacao = $("#ocupacao").val();
    let salario = $("#salario").val();
    let comprovanteResidencia = $('#comprovanteResidencia')[0];
    let copiaIdentidade = $("#copiaIdentidade")[0];
    let comprovanteRenda = $("#comprovanteRenda")[0];

    let formData = new FormData(); 

    formData.append('nome', nome);
    formData.append('identidade', identidade);
    formData.append('endereco', endereco);
    formData.append('cidade', cidade);
    formData.append('uf', uf);
    formData.append('ocupacao', ocupacao);
    formData.append('salario', salario);
    formData.append('comprovanteResidencia', comprovanteResidencia.files[0]);
    formData.append('copiaIdentidade', copiaIdentidade.files[0]);
    formData.append('comprovanteRenda', comprovanteRenda.files[0]);
    
    
    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", BASE_URL + "administrativo/abrirConta", true);

    xhttp.send(formData);



    $.ajax({
        type: "post",
        url: BASE_URL + "administrativo/abrirConta",
        data: {formData},
        dataType: "dataType",
        success: function (response) {
            console.log(response)
        }
    });
}