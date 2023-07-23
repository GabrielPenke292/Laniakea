<!-- Card de Resumo -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Neste período...</h5>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="row">
                        <div class="bg-success  col-1"></div>
                        <div class="card-body col-11">
                            <p class="card-text">Entraram na sua conta:</p>
                            <h6 class="card-title">$<?= number_format($data->resume->entered, 2, '.', ',') ?? '0,00'; ?></h6>
                        </div>

                    </div>
                </div>
            </div>
    
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="row">
                        <div class="bg-danger col-1"></div>
                        <div class="card-body col-11">
                            <p class="card-text">Saíram da sua conta:</p>
                            <h6 class="card-title">$<?= number_format($data->resume->left, 2, '.', ',') ?? '0,00'; ?></h6>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="row">
                        <div class="bg-<?= $data->resume->balance >= 0 ? 'success' : 'danger' ?> col-1"></div>
                        <div class="card-body col-11">
                            <p class="card-text">Seu balanço no período é de:</p>
                            <h6 class="card-title"> $<?= number_format($data->resume->balance, 2, '.', ',') ?? '0,00'; ?></h6>
                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>
</div><!-- End Card de Resumo -->