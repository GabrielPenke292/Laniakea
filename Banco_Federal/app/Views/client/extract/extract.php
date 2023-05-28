<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <?= $this->include('client/components/filtro') ?>

        <?= $this->include('client/components/resumo_extrato') ?>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Extrato</h5>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Data</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-danger">
                            <th scope="row">Saída</th>
                            <td>14/05/2023 14:12:26</td>
                            <td>$ 12,98</td>
                            <td>
                                <i class="bi bi-eye-fill text-primary cursor-pointer" id="icone-visualizar-extrato" onclick="app.modalMoviment('extrato-movimento', 1)"></i>
                            </td>
                        </tr>

                        <tr class="table-danger">
                            <th scope="row">Saída</th>
                            <td>18/05/2023 09:45:29</td>
                            <td>$ 40,21</td>
                            <td><i class="bi bi-eye-fill text-primary" id="icone-visualizar-extrato"></i></td>
                        </tr>

                        <tr class="table-danger">
                            <th scope="row">Saída</th>
                            <td>19/05/2023 18:50:00</td>
                            <td>$ 100,45</td>
                            <td><i class="bi bi-eye-fill text-primary" id="icone-visualizar-extrato"></i></td>
                        </tr>

                        <tr class="table-success">
                            <th scope="row">Entrada</th>
                            <td>21/05/2023 10:11:30</td>
                            <td>$ 18,20</td>
                            <td><i class="bi bi-eye-fill text-primary" id="icone-visualizar-extrato"></i></td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <div id="generic_modal"></div>
</div>

</main>

<script src="<?php echo base_url('assets/js/client/extract.js') ?>"></script>
<?= $this->endSection(); ?>
</div>