<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h5 class="card-title">Fatura <?= $idBill ?></h5>
                <p class="card-text">Descrição: <?= $description ?></p>
                <p class="card-text">Valor: <?= $value ?></p>
                <p class="card-text">Vencimento: <?= $due_date ?></p>
                <p class="card-text">Esse débito foi gerado no dia: 05/06/2023</p>
            </div>
            <div class="col-md-4 col-sm-6 d-flex align-items-stretch ">
                <button type="button" class="btn btn-primary w-50" onclick="app.pay_bill('<?= $idBill ?>')">Pagar</button>
            </div>
            <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                <button type="button" class="btn btn-danger w-50" onclick="app.cancel_bill('<?= $idBill ?>')">Cancelar</button>
            </div>
        </div>

    </div>
</div>