const app = {
    avancarProximaTab: function(idTabAtual, idProximaTab){
        if($("#valueInput").val() == "" || $("#dateInput").val() == ""){
            alert("Preencha todos os campos!");
            return false;
        }
        // Remover a classe 'active' da tab atual
        $(`#${idTabAtual}-tab`).removeClass('active');

        // Adicionar a classe 'active' para a próxima tab
        $(`#${idProximaTab}-tab`).addClass('active');

        // Remover a classe 'show active' do conteúdo da tab atual
        $(`#${idTabAtual}`).removeClass('show active');

        // Adicionar a classe 'show active' para o conteúdo da próxima tab
        $(`#${idProximaTab}`).addClass('show active');
    },
    voltarTab: function(idTabAtual, idTabAnterior){
        // Remover a classe 'active' da tab atual
        $(`#${idTabAtual}-tab`).removeClass('active');

        // Adicionar a classe 'active' para a próxima tab
        $(`#${idTabAnterior}-tab`).addClass('active');

        // Remover a classe 'show active' do conteúdo da tab atual
        $(`#${idTabAtual}`).removeClass('show active');

        // Adicionar a classe 'show active' para o conteúdo da próxima tab
        $(`#${idTabAnterior}`).addClass('show active');
    },
    transferir: function(){
        alert("Transferência realizada com sucesso!");
    }
}
