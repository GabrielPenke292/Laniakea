<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('templates/head') ?>
</head>
<body>  
    <header class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <img src="assets/img/governo-logo-sem-fundo.png" alt="Logo do governo">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="title-top">Governo<br>de<br>Laniakea</div>
                </div>

                <div class="col-md-4">
                    <div class="menu-top d-inline-block">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ministérios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">noticias</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- menu top -->
                    <div class="btn-entrar d-inline-block">
                        <button class="btn btn-entrar">Entrar</button>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </header>

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
                    
                    <div class="col-md-3 destaque-single bg-secondary">

                    </div><!-- destaque single -->

                    <div class="col-md-3 destaque-single bg-secondary">
                        
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