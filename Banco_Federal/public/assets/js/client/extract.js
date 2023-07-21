const app = {
    filterExtract : function(){
        openBlockUI();
        $.ajax({
            type: "GET",
            url: base_url + "client/extract/filter/",
            data: {
                "startDate" : $("#data_inicial").val(),
                "finalDate" : $("#data_final").val(),
            },
            dataType: "HTML",
            success: function (response) {
                console.log(response);
            }
        }).done(function(){
            closeBlockUI();
        });        
    },
    modalMoviment : function(idModal, idMovimento){

        openBlockUI();

        $.ajax({
            type: "GET",
            url: base_url + "client/extract/moviment/"+idMovimento,
            dataType: "HTML",
            success: function (response) {
                $("#generic_modal").html(response);
                $("#"+idModal).modal("show");

            }
        }).done(function(){
            closeBlockUI();
        });
    },


}
