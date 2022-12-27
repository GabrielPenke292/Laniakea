<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('templates/head') ?>
</head>
<body>
    <?= $this->include('templates/header') ?>
    <section id="dados">
        <div class="container">
            <div class="title text-center m-5">
                <h1>República Constitucional de Laniakea</h1>
            </div>
            Número de cidades: 9
            Número de habitantes: 0
            Número de empresas registradas: 0
            Extensão territória: Desconhecida
            PIB: Desconhecido

            Unidade Monetária: Átono
            Cambio com Dóllar: Desconhecido
            Cambio com Euro: Desconhecido
            Cambio com Libra: Desconhecido

            Número de escolas: 0
            Número de Universidades: 0
            Número Creches: 0
            Índice de desempenho escolar: Desconhecido

            


        </div>
    </section>

    <section id="mapa">
        <div class="container">
            
            <div class="row d-flex justify-content-center">
                <div>
                    <img src="assets/img/mapa-com-seta.png" alt="mapa do país">    
                </div>
            </div>

            <div class="row d-flex justify-content-center">                
                <div class="m-3">
                    <a href="<?= base_url() ?>/public" class="btn btn-primary btn-back">Voltar</a>            
                </div>
            </div>
            
        </div>
    </section>


</body>
</html>