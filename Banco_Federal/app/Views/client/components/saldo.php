<div class="card " style="width: 18rem;">
    <img src="<?php echo base_url('assets/img/client/money.svg'); ?>" class="card-img-top pt-2" alt="saldo" id="icon-home">
    <div class="card-body">
        <h5 class="card-title">Saldo</h5>
        <h3 class="card-text">$ <?= isset($client->CONTA_SALDO) ? number_format($client->CONTA_SALDO, 2, '.', ',') : '800,00' ?></h3>
        <a href="<?php echo base_url("client/extract");  ?>" class="btn btn-primary">Extrato</a>
    </div>
</div>