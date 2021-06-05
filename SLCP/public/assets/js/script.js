$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "get-next-register-number",
        dataType: "json",
        success: function (response) {
            $("#registerNumber").val("LK-"+response);
            $("#numberPeopleRegistered").html(response-1);
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

