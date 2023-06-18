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
    }
}

$(document).ready(function () {
    let dataAtual = new Date();

    // Obtém o mês atual (valor numérico)
    let actualMonth = dataAtual.getMonth() + 1;

    // Traduz o mês atual para o nome do mês em português	
    actualMonth = translateMonth(actualMonth);

    app.get_invoices(actualMonth);
});