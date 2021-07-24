<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('templates/head') ?>
</head>
<body>
    <?= $this->include('templates/header') ?>

    <section id="banner-principal">
        
    </section>

    <section id="services">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="services-title text-center p-5 text-white">
                        <h2>O que podemos fazer por você:</h2>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
            
            <div class="row d-flex justify-content-around mb-5">
                <div class="col-2 text-white service-box text-center align-self-center" id="service-one">
                    <p>Abertura de conta</p>
                </div><!-- service one -->

                <div class="col-2 text-white service-box" id="service-two">
                    <p>Crédito</p>
                </div><!-- service two -->

                <div class="col-2 text-white service-box" id="service-three">
                    <p>Financiamentos e consórcios</p>
                </div><!-- service three -->

                <div class="col-2 text-white service-box" id="service-four">
                    <p>Renegociação de dívidas</p>
                </div><!-- service four -->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- services -->

    <section id="dual-cards">
        <div class="row my-4">
            <div class="col-6">
                <div class="card-img">
                
                </div>
            </div><!-- col -->

            <div class="col-6">
                <div class="card-info d-flex h-100 justify-content-center">
                    <div class="msg align-self-center">
                        <p>Somos o primeiro banco de Laniakea!</p>
                        <p>Contem conosco para construir essa incrível nação!</p>
                    </div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </section><!-- dual cards -->

    <?= $this->include("templates/footer"); ?>

</body>
</html>