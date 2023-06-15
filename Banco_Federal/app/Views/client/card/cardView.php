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

        <div class="row mt-3">
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Earnings (monthly)</div>
                                <div class="h5">$4,390</div>
                                <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                    <i class="me-1" data-feather="trending-up"></i>
                                    12%
                                </div>
                            </div>
                            <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-start-lg border-start-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-secondary mb-1">Average sale price</div>
                                <div class="h5">$27.00</div>
                                <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                    <i class="me-1" data-feather="trending-down"></i>
                                    3%
                                </div>
                            </div>
                            <div class="ms-2"><i class="fas fa-tag fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-start-lg border-start-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-success mb-1">Clicks</div>
                                <div class="h5">11,291</div>
                                <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                    <i class="me-1" data-feather="trending-up"></i>
                                    12%
                                </div>
                            </div>
                            <div class="ms-2"><i class="fas fa-mouse-pointer fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 4-->
                <div class="card border-start-lg border-start-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-info mb-1">Conversion rate</div>
                                <div class="h5">1.23%</div>
                                <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                    <i class="me-1" data-feather="trending-down"></i>
                                    1%
                                </div>
                            </div>
                            <div class="ms-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection(); ?>
</div>