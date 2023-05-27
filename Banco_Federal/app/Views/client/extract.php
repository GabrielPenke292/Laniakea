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
                                <i class="bi bi-eye-fill text-primary cursor-pointer" id="icone-visualizar-extrato" onclick="app.modal('extrato-movimento', 1)"></i>
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


        <!-- Modal -->
        <div class="modal fade" id="extrato-movimento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title text-white" id="exampleModalLabe">Movimento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <p>Data: 14/05/2023</p>
                                <p>Hora: 09:45:29</p>
                                <p>Valor: $12,98</p>
                                <p>Modalidade: Transferência bancária</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <hr class="my-auto mx-3" style="height: 100%; width: 4px; background-color: green;">
                            </div>
                            <div class="col-md-5">
                                <p>Agência: 0001</p>
                                <p>Conta: 00000000000000000000</p>
                                <p>CPF: 000.000.000-00</p>
                                <p>Nome: Nome da pessoa/estabelecimento</p>
                                <p>Telefone: (00) 00000-0000</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
</div>

</main>

<script src="<?php echo base_url('assets/js/client/extract.js') ?>"></script>
<?= $this->endSection(); ?>
</div>