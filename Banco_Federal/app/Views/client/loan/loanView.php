<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>
<div class="col-md-9">
    <?= $this->section('content'); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3">
            <div class="card-body">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="nav-data-tab" data-toggle="tab" data-target="#nav-data" role="tab" aria-controls="nav-data" aria-selected="true" href="#">Dados</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="nav-simulation-tab" data-toggle="tab" data-target="#nav-simulation" role="tab" aria-controls="nav-simulation" aria-selected="false" href="#">Simulação</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="nav-confirmation-tab" data-toggle="tab" data-target="#nav-confirmation" role="tab" aria-controls="nav-confirmation" aria-selected="false" href="#">Confirmação</a>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-data" role="tabpanel" aria-labelledby="nav-data-tab">
                        <!-- Conteúdo da tab de dados de empréstimo -->
                        <?= $this->include('client/loan/tabLoanData') ?>
                    </div>
                    <div class="tab-pane fade" id="nav-simulation" role="tabpanel" aria-labelledby="nav-simulation-tab">
                        <!-- Conteúdo da tab de simulação de empréstimo -->
                        <?= $this->include('client/loan/tabLoanSimulation') ?>
                    </div>
                    <div class="tab-pane fade" id="nav-confirmation" role="tabpanel" aria-labelledby="nav-confirmation-tab">
                        <!-- Conteúdo da tab de confirmação de empréstimo -->
                        <?= $this->include('client/loan/tabLoanConfirmation') ?>
                    </div>
                </div>
            </div>
        </div>



    </main>



    <?= $this->endSection(); ?>
</div>