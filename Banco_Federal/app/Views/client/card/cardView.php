<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>   
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col">
                        <img src="<?= base_url('assets/icons/credit-card.svg')?>" alt="ícone de cartão de crédito" id="credit-card-icon">
                    </div>
                </div>    
                


            </div>
        </div>
    </main>

    <?= $this->endSection(); ?>
</div>