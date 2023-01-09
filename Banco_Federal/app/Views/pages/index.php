<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<section id="services">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="services-title text-center p-5 text-white">
                    <h2>O que podemos fazer por você:</h2>
                </div>
            </div><!-- col -->
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?= base_url('assets/img/abertura_conta.jpg') ?>" class="card-img-top" style="height: 257px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Abertura de conta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="<?= base_url('assets/img/card.jpg') ?>" class="card-img-top" style="height: 257px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Crédito</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?= base_url('assets/img/financing.jpg') ?>" class="card-img-top" style="height: 257px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Financiamentos e consórcios</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="<?= base_url('assets/img/contrato.jpg') ?>" class="card-img-top" style="height: 257px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Renegociação de dívidas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        
        

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

<?= $this->endSection(); ?>