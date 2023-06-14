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
                        <img src="<?= base_url('assets/icons/credit-card.svg') ?>" alt="ícone de cartão de crédito" id="credit-card-icon">
                    </div>
                </div>

                <div class="card bg-primary border-0">
                    <div class="card-body">
                        <h5 class="text-white-50">Limite disponível</h5>
                        <div class="mb-4">
                            <span class="display-4 text-white">$4800</span>
                        </div>
                        <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-success w-75 rounded-pill" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?= $this->endSection(); ?>
</div>