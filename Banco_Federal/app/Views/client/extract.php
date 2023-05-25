<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <?= $this->include('client/components/filtro') ?>
        
        <?= $this->include('client/components/resumo_extrato') ?>

        
        

    </main>

    <?= $this->endSection(); ?>
</div>