const app = {
    modalMoviment : function(idModal, idMovimento){
        // $.blockUI();
        $.blockUI({ css: { backgroundColor: '#f00', color: '#fff'} });

        $.ajax({
            type: "GET",
            url: base_url + "client/extract/moviment/"+idMovimento,
            dataType: "HTML",
            success: function (response) {
                $("#generic_modal").html(response);
                $("#"+idModal).modal("show");

            }
        }).done(function(){

            $.unblockUI();
        });
    }
}
