<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('templates/head') ?>
</head>
<body>  
    <?= $this->include('templates/header') ?>

    <main>
        <section id="boas-vindas">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 text-white msg-bem-vindo text-center">
                        <h2 class="">Seja bem vindo(a) ao</h2>
                        <h4 class="text-suave">Projeto Laniakea</h4>    
                    </div>
                </div>

               
            </div>
        </section><!-- boas vindas -->

        <section id="breve-explicacao" class="mt-3">
            <div class="container">
                <div class="text-center pb-3">
                    <h2>O que é o projeto Laniakea?</h2>
                </div>
                <p>Um país fictício! Laniakea é uma base de dados que contém diversos subprojetos onde eles se interagem e visam gerar uma complexidade 
                    similar a administração de um país!</p>
                <p>A idéia aqui é simular o surgimento de uma nação independente e a criação de projetos baseados em no mundo real</p>
                <p>Laniakea tem sistema bancário, educacional, político, etc... Além de sistemas menores como redes de supermercados, postos de combustível e lojas de eletrodomésticos</p>
                <p>O projeto é contínuo, logo, novos sistemas surgem com o tempo.</p>
                <p>Abaixo você pode visualizar mais explicações sobre o "país", além de ter acesso a dados gerais do projeto!</p>
            </div>
        </section>

        <section id="servicos-destaque">
            <div class="container">
                <div class="text-center pb-3">
                    <h2>Serviços em destaque</h2>
                </div>

                <div class="row d-flex justify-content-center">
                    
                    <div class="col-md-3 destaque-single bg-secondary text-center inline-block align-middle">
                        <a href="conhecendo-projeto">
                            <h2>Conhecendo o projeto</h2>
                        </a>                    
                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary text-center inline-block align-middle">
                        <a href="dados-oficiais">
                            <h2>Projetos, números e links</h2>
                        </a>                    
                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary text-center inline-block align-middle">
                        <a href="dados-oficiais">
                            <h2>Dados Oficiais do país</h2>
                        </a>                    
                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary text-center">
                        <a href="historia-oficial">
                            <h2>História Oficial do país</h2>                        
                        </a>

                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary">
                        
                    </div><!-- destaque single -->
                </div><!-- row -->

                <div class="row d-flex justify-content-center">
                    
                    <div class="col-md-3 destaque-single bg-secondary">

                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary">
                        
                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary">
                        
                    </div><!-- destaque single -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- servicos destaque -->
    </main>
    
</body>
</html>