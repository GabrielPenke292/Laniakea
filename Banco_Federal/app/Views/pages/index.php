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
                <div class="col-2 bg-secondary service-box" id="service-one">
                    <p>SERVIÇO 01</p>
                </div><!-- service one -->

                <div class="col-2 bg-secondary service-box" id="service-two">
                    <p>SERVIÇO 02</p>
                </div><!-- service two -->

                <div class="col-2 bg-secondary service-box" id="service-three">
                    <p>SERVIÇO 03</p>
                </div><!-- service three -->

                <div class="col-2 bg-secondary service-box" id="service-four">
                    <p>SERVIÇO 04</p>
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
                <div class="card-info">
                
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </section><!-- dual cards -->

    <?= $this->include("templates/footer"); ?>
</body>
</html>