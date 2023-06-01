<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>   
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    
        <div class="row mt-3">
            <div class="col-12 d-flex justify-content-center">
                <?= $this->include('client/pay/billetcard'); ?>
            </div>
        </div>
        
        <hr>


        
        
    </main>
    
    <script src="<?php echo base_url('assets/js/client/transfer.js') ?>"></script>

    <?= $this->endSection(); ?>
</div>