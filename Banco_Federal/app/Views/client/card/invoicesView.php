<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="row mt-5 text-center d-flex justify-content-center">
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Abril/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$3200.13</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Maio/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$4233.25</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Junho/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$4200.00</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Julho/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$780.33</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Agosto/23</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$320.01</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div id="invoiceMonth"></div>

    </main>

    <script src="<?php echo base_url('assets/js/client/card.js') ?>"></script>
    <?= $this->endSection(); ?>
</div>