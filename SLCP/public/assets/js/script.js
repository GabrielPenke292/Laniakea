$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "get-last-register",
        dataType: "json",
        success: function (response) {
            $("#registerNumber").val("LK-"+response['proximoId']);
            $("#numberPeopleRegistered").html(response['proximoId']-1);
            $("#lastRegistered").html(response['lastName']);
        }
    });
});

function mostra_cidades(){
    uf = $("#uf").val();
    $.ajax({
        type: "get",
        url: "get-cidades-by-uf",
        data: {uf},
        dataType: "html",
        success: function (response) {
           $("#city").find('option').remove();
           $("#city").html(response);
        }
    });
}

function close_msg(){
    $("#retorno-fail").hide();
    $("#retorno-success").hide();
}

function openModal(id, nome, email){
    $("#modalEditar").modal("show");
    $("#idFuncionario").val(id);  
    
    $("#name").val(nome);
    $("#email").val(email);
}

