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

                <div class="card bg-secondary border-0">
                    <div class="card-body">
                        <h5 class="text-white-50">Limite disponível</h5>
                        <div class="mb-4">
                            <span class="display-4 text-white">$4800</span>
                        </div>
                        <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-primary w-75 rounded-pill" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-start-lg border-start-primary h-100" onclick="app.show_screen('invoices')" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="h5">Faturas</div>
                                <div class="small fw-bold text-primary mb-1">0 faturas em atraso</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-start-lg border-start-secondary h-100" onclick="app.show_screen('limit')" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="h5">Controle de limite</div>
                                <div class="small fw-bold text-primary mb-1">Seu limite atual é $ 5000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-start-lg border-start-success h-100" onclick="app.show_screen('cancel')" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="h5">Cancelar cartão</div>
                                <div class="small fw-bold text-primary mb-1">Clique aqui para cancelar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 4-->
                <div class="card border-start-lg border-start-info h-100" onclick="app.show_screen('graphic')" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="h5">Controle de gastos</div>
                                <div class="small fw-bold text-primary mb-1">Visualize um gráfico com seus gastos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="<?php echo base_url('assets/js/client/card.js') ?>"></script>
    <?= $this->endSection(); ?>
</div>