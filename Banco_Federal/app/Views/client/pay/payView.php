<?php
$bills = [
    [
        'id' => 'lk-d-1',
        'description' => 'luz system 06/23',
        'value' => 38.45,
        'due_date' => '31/06/2023'
    ],
    [
        'id' => 'lk-d-s-1',
        'description' => 'westerloo supermarket',
        'value' => 400.25,
        'due_date' => '31/06/2023'
    ],
    [
        'id' => 'lk-d-e-1',
        'description' => 'schoolar science par 06/23',
        'value' => 220.00,
        'due_date' => '28/06/2023'
    ],[
        'id' => 'lk-d-s-2',
        'description' => 'westerloo supermarket',
        'value' => 78.36,
        'due_date' => '22/06/2023'
    ]
]
?>

<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>   
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    
        <div class="row mt-3">
            <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                <?= $this->include('client/pay/billetcard'); ?>
            </div>

            <div class="col-md-8" style="max-height: 300px; overflow-y: auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Vencimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($bills)){ foreach($bills as $bill): ?>
                            <tr onclick="app.detail_Bill(this,'<?= $bill['id'] ?>')" style="cursor: pointer;">
                                <th scope="row"><?= $bill['id'] ?></th>
                                <td><?= $bill['description'] ?></td>
                                <td><?= $bill['value'] ?></td>
                                <td><?= $bill['due_date'] ?></td>
                            </tr>
                        <?php endforeach; }?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <hr>    

        <div id="details_bill_card"></div>
        
        
    </main>
    
    <script src="<?php echo base_url('assets/js/client/pay.js') ?>"></script>

    <?= $this->endSection(); ?>
</div>