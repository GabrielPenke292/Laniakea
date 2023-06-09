const app = {
    detail_Bill : function(row, idBill){
        const description = $(row).find('td:nth-child(2)').text();
        const value = $(row).find('td:nth-child(3)').text();
        const due_date = $(row).find('td:nth-child(4)').text();

        $("#details_bill_card").html('<img src="' + base_url + 'assets/gifs/table.gif" alt="Carregando...">');

        $.ajax({
            type: "GET",
            url: base_url + "client/pay/details/" + idBill,
            data: {
                description,
                value,
                due_date
            },
            dataType: "HTML",
            success: function (response) {
                $("#details_bill_card").html(response);
            }
        });
    },
    pay_bill : function(idBill){
        $.blockUI({ message: '' });
        $.ajax({
            type: "POST",
            url: base_url + "client/pay/pay-bill/" + idBill,
            dataType: "JSON",
            success: function (response) {
                if(response.error == false){
                    Swal.fire({
                        title: 'Sucesso!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                    window.location.reload();
                }else{
                    Swal.fire({
                        title: 'Erro!',
                        text: response.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }
        }).done(function(){
            $.unblockUI();
        });
    },

    cancel_bill : function(idBill){
        $("#details_bill_card").html('<img src="' + base_url + 'assets/gifs/table.gif" alt="Carregando...">');
        // esperar 1/2 segundo
        setTimeout(function(){
            $("#details_bill_card").html('');
        }, 500);

    }

}
