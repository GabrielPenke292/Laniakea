<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="row mt-5 text-center d-flex justify-content-center">
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 pointer" onclick="app.get_invoices('abril')">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Abril/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$3200.13</div>
                            </div>
                            <button class="btn btn-success w-100 text-white mt-2" onclick="app.open_modal(1)" disabled >Paga</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 pointer" onclick="app.get_invoices('maio')">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Maio/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$4233.25</div>
                            </div>
                            <button class="btn btn-success w-100 text-white mt-2" onclick="app.open_modal(2)" disabled >Paga</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2 pointer" onclick="app.get_invoices('junho')"> 
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Junho/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$4200.00</div>
                            </div>
                            <button class="btn btn-primary w-100 text-white mt-2" onclick="app.open_modal(3)" >Pagar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2 pointer" onclick="app.get_invoices('julho')">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Julho/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$780.33</div>
                            </div>
                            <button class="btn btn-warning w-100 text-white mt-2" onclick="app.open_modal(4)" disabled >A fechar</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2 pointer" onclick="app.get_invoices('agosto')">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Agosto/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$320.01</div>
                            </div>
                            <button class="btn btn-warning w-100 text-white mt-2" onclick="app.open_modal(5)" disabled >A fechar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div id="invoiceMonth"></div>

        <!-- Modal -->
        <div class="modal fade" id="confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="invoice_id">
                Confirma o pagamento da fatura com o saldo?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="app.pay_invoice()">Confirmar</button>
            </div>
            </div>
        </div>
        </div>

    </main>

    <script src="<?php echo base_url('assets/js/client/card.js') ?>"></script>
    <?= $this->endSection(); ?>
</div>