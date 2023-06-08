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
    
}
