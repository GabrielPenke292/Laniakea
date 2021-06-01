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
                        <h2 class="">Seja bem vindo(a)</h2>
                        <h4 class="text-suave">O que você procura?</h4>    
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-md-8">
                        <input class="form-control me-2 search-home" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </div>
        </section><!-- boas vindas -->

        <section id="servicos-destaque">
            <div class="container">
                <div class="text-center pb-3">
                    <h2>Serviços em destaque</h2>
                </div>

                <div class="row d-flex justify-content-center">
                    
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