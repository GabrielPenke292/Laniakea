<?= $this->extend('template/layout'); ?>

<?= $this->section('headerSection'); ?>
    <?= $this->include('template/header'); ?>
<?= $this->endSection(); ?>

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
                        <p class="card-text">Abra sua conta conosco e faça parte dessa incrível jornada que é desbravar esse novo país.</p>
                        <a href="#" class="btn btn-primary">Clique aqui</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="<?= base_url('assets/img/card.jpg') ?>" class="card-img-top" style="height: 257px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Crédito</h5>
                        <p class="card-text">Aqui você conta com uma análise justa de crédito e pode já sair com um cartão logo de cara.</p>
                        <a href="credit" class="btn btn-primary">Clique aqui</a>
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
                        <p class="card-text">Sabe aquele sonho que você quer realizar? Pode estar muito próximo com os nossos programas de financiamento e consórcio.</p>
                        <a href="#" class="btn btn-primary">Clique aqui</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="<?= base_url('assets/img/contrato.jpg') ?>" class="card-img-top" style="height: 257px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Renegociação de dívidas</h5>
                        <p class="card-text">Aqui você encontra as melhores taxas na renegociação da sua dívida. Não perca essa oportunidade...</p>
                        <a href="#" class="btn btn-primary">Clique aqui</a>
                    </div>
                </div>
            </div>
        </div>
        
        

    </div><!-- container -->
</section><!-- services -->

<section id="dual-cards mt-3">
    <div class="row my-4">
        <div class="col-md-6 col-sm-12 " id="img-dual-cards">
            <img src="<?= base_url('assets/img/agencia.jpg') ?>" alt="" >
            
        </div><!-- col -->

        <div class="col-md-6 col-sm-12 " id="text-dual-cards">
            <div class="card-info ">
                <div class="msg align-self-center">
                    <p>Somos o primeiro banco de Laniakea!</p>
                    <p>Contem conosco para construir essa incrível nação!</p>
                </div>
            </div>
        </div><!-- col -->
    </div><!-- row -->
</section><!-- dual cards -->

<?= $this->endSection(); ?>