<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('templates/head') ?>
</head>
<body>
    <?= $this->include('templates/header') ?>
    <section id="historia">
        <div class="container">
            <div class="title text-center m-5">
                <h1>República Constitucional de Laniakea</h1>
            </div>
            
            <p>
                Composta por 9 cidades, Laniakea é um país que faz fronteira ao sul de Portugal e ao norte da África, banhado pelo oceano atlântico.
                Antes um território de disputa entre portugueses e franceses, Laniakea conquistou sua independência no ano de 2021 de forma pacífica e a partir de então surge a República Constitucional de Laniakea.
            </p>
            
            <p>
                Sua capital é Groombridge, ao sudeste do país. O idioma oficial é o português e o inglês é a segunda lingua da população. As outras 8 cidades são: Prócio, Luyten, Maffei, Dwingeloo, Antlia, Fornax, Oberon e Proteu.
            </p>
            
            <p>
                Como o país acaba de surgir, ainda carece de uma fonte consistente de dados.      
            </p>
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