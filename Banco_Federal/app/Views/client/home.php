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
            <img src="assets/img/client/money.svg" class="card-img-top" alt="saldo" id="icon-home">
            <div class="card-body">
                <h5 class="card-title">Saldo</h5>
                <h3 class="card-text">R$ 5320,10</h3>
                <a href="#" class="btn btn-primary">Extrato</a>
            </div>
        </div>

        <hr>

        <h5 class="mb-3">O que deseja fazer?</h5>

        <div class="row">
            <div class="card col-md-3 col-sm-12 mr-1" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
            <div class="card col-md-3 col-sm-12 mr-1" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
            <div class="card col-md-3 col-sm-12 " style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>

    </main>

    <?= $this->endSection(); ?>
</div>