const app = {
    show_screen: function (screen){
        window.location.href = base_url + 'client/card/' + screen;
    },

    get_invoices: function (month){
        $("#invoiceMonth").html('<img src="' + base_url + 'assets/gifs/table.gif" alt="Carregando..." width="100%">');
        
        $.ajax({
            url: base_url + 'client/card/get_invoice_month',
            type: 'GET',
            data: {
                month
            },
            success: function (response){
                $('#invoiceMonth').html(response);
            }
        });
    },

    open_modal: function (invoice_id){
        $('#invoice_id').val(invoice_id);
        $('#confirmation-modal').modal('show');
    },
    pay_invoice: function (){
        $('#confirmation-modal').modal('hide');

        $.blockUI({ message: '' });
        const invoice_id = $('#invoice_id').val();
        $.ajax({
            url: base_url + 'client/card/pay_invoice/' + invoice_id,
            type: 'POST',
            dataType: "JSON",
            success: function (response){
                console.log(response)
                if(response == 'success'){
                    Swal.fire({
                        title: 'Sucesso!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                    app.get_invoices(app.get_actual_month());
                }
            }
        }).done(function(){
            $.unblockUI();
        });;
    },

    get_actual_month: function (){
        let dataAtual = new Date();

        // Obtém o mês atual (valor numérico)
        let actualMonth = dataAtual.getMonth() + 1;

        // Traduz o mês atual para o nome do mês em português	
        actualMonth = translateMonth(actualMonth);

        return actualMonth;
    }

}

$(document).ready(function () {

    app.get_invoices(app.get_actual_month());
});