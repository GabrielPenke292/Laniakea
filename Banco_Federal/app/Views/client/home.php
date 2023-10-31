<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Seja bem-vindo(a), <?= isset($_SESSION['userName']) ? $_SESSION['userName'] : '{nome do usuário}' ?></h1>

        </div>

        <div id="component_saldo"></div>
        <?= $this->include('client/components/saldo'); ?>

        <hr>

        <?= $this->include('client/components/destaques'); ?>


    </main>
    <script src="<?php echo base_url('assets/js/client/home.js') ?>"></script>
    <?= $this->endSection(); ?>
</div>