<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Seja bem-vindo(a), {nome do usuário}</h1>

        </div>

        <div class="card " style="width: 18rem;">
            <img src="assets/img/client/money.svg" class="card-img-top pt-2" alt="saldo" id="icon-home">
            <div class="card-body">
                <h5 class="card-title">Saldo</h5>
                <h3 class="card-text">R$ 5320,10</h3>
                <a href="#" class="btn btn-primary">Extrato</a>
            </div>
        </div>

        <hr>

        <?= $this->include('client/destaques'); ?>
        

    </main>

    <?= $this->endSection(); ?>
</div>