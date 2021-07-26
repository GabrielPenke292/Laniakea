const BASE_URL = "http://localhost/meus-projetos/Laniakea/Banco_Federal/public/";

// abertura de conta
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
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4){
            let data = JSON.parse(xhttp.responseText);         
            showAlert(data);
            if(data.status == 'success'){
                $("#form-open-account").reset();
            }
        }
    }
    
    xhttp.open("POST", BASE_URL + "administrativo/abrirConta", true);

    xhttp.send(formData);

    function showAlert(data){
        Swal.fire({
            position: 'top-end',
            icon: data['status'],
            title: data['message'],
            showConfirmButton: false,
            timer: 2500
        })
    }

}

// buscar as cidades de acordo com o estado selecionado
$(document).on("change", '#uf', function(e){
    e.preventDefault();
    let uf = $("#uf").val();
    
    $.ajax({
        type: "GET",
        url: BASE_URL + "administrativo/get-cities-by-uf",
        data: {uf},
        dataType: "HTML",
        success: function (response) {
            $('#cidade').html(response);
        }
    });
});

$(document).on('click', '#ativar_conta', function(e){
    let numero_conta = $('#numero_conta').val(); // numero da conta
    let senha = $('#senha').val(); // senha
    let c_senha = $('#c_senha').val(); // confirmação de senha

    if(senha == c_senha){ // Se a senha for igual a confirmação de senha ...
        $.ajax({
            type: "post",
            url: BASE_URL + "administrativo/ativar-reativar-conta",
            data: {
                numero_conta,
                senha,
            },
            dataType: "json",
            success: function (response) {
                Swal.fire({ //mostra um alerta na tela
                    position: 'top-end',
                    icon: response['status'],
                    title: response['message'],
                    showConfirmButton: false,
                    timer: 2500
                });
                if(response['status'] == 'success'){ // se o retorno da requisição tiver o status 'success'
                    location.replace(BASE_URL + 'administrativo'); // Retorna para dashboard
                }
            
            }
        });
    }else{ // Se a senha não for igual a confirmação de senha ...
        Swal.fire('As senhas não conferem'); // ... é exibido um alerta
    }
});