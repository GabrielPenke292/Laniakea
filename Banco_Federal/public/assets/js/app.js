
function openBlockUI(){
    $.blockUI({ css: { 
        border: 'none', 
        padding: '15px', 
        backgroundColor: '#000', 
        '-webkit-border-radius': '10px', 
        '-moz-border-radius': '10px', 
        opacity: .5, 
        color: '#fff' 
        },
        message: 'Aguarde...' 
    });
}

function closeBlockUI(){
    $.unblockUI();
}   

const httpRequest = (url, method, data) => {
    $.ajax({
        url: url,
        type: method,
        dataType: 'json',
        data: data,
        success: function (response) {
            
        }
    });
}