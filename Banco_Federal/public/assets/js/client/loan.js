const app = {
    stepForward: function (actualTab, nextTab) {
        // Remover a classe 'active' da tab atual
        $(`#nav-${actualTab}-tab`).removeClass('active');

        // Adicionar a classe 'active' para a próxima tab
        $(`#nav-${nextTab}-tab`).addClass('active');

        // Remover a classe 'show active' do conteúdo da tab atual
        $(`#nav-${actualTab}`).removeClass('show active');

        // Adicionar a classe 'show active' para o conteúdo da próxima tab
        $(`#nav-${nextTab}`).addClass('show active');
    },
    backStep: function(actualTab, previusTab){
        // Remover a classe 'active' da tab atual
        $(`#nav-${actualTab}-tab`).removeClass('active');

        // Adicionar a classe 'active' para a próxima tab
        $(`#nav-${previusTab}-tab`).addClass('active');

        // Remover a classe 'show active' do conteúdo da tab atual
        $(`#nav-${actualTab}`).removeClass('show active');

        // Adicionar a classe 'show active' para o conteúdo da próxima tab
        $(`#nav-${previusTab}`).addClass('show active');
    },
    confirmLoan: function(){
        alert("Empréstimo realizado com sucesso!");
    }
}


$(document).ready(function() {
    Inputmask("currency", {
        radixPoint: ',',
        prefix: '$ ',
        inputtype: "numeric"
    }).mask("#loan-amount");

  });