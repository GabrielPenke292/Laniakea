<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>

<div class="col-md-9">
    <?= $this->section('content'); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1>Renegociação de Dívidas</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card status-dividas py-3">
                    <div class="container">
                        <h5 class="bg-success text-white p-3 text-center rounded">Você não possui dívidas para renegociar</h5>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-12 text-center">
            <h2>Opções de Renegociação</h2>
        </div>
        <ul>
            <li><a href="#opcao1">Renegociar parcelas</a></li>
            <li><a href="#opcao2">Revisão de juros</a></li>
            <li><a href="#opcao3">Alteração de prazo</a></li>
            <li><a href="#opcao4">Pagamento único com desconto</a></li>
        </ul>

        <h2 id="opcao1">Renegociar parcelas</h2>
        <p>A opção de renegociar parcelas permite ajustar o valor e a quantidade de parcelas a serem pagas. Você pode definir novos valores mensais e a duração total da renegociação.</p>

        <h2 id="opcao2">Revisão de juros</h2>
        <p>A revisão de juros possibilita a análise e a possibilidade de redução das taxas de juros aplicadas à sua dívida. Você pode solicitar uma revisão para diminuir os encargos financeiros.</p>

        <h2 id="opcao3">Alteração de prazo</h2>
        <p>Com a opção de alteração de prazo, você pode estender ou encurtar o período de pagamento da sua dívida. Ajuste a quantidade de meses para se adequar à sua capacidade financeira.</p>

        <h2 id="opcao4">Pagamento único com desconto</h2>
        <p>A opção de pagamento único com desconto permite que você quite a sua dívida em uma única parcela, com um desconto especial aplicado. Essa é uma alternativa para quem deseja eliminar a dívida de uma vez.</p>

        <p>Selecione a opção de renegociação que melhor atende às suas necessidades e entre em contato com um de nossos atendentes para obter mais informações e iniciar o processo de renegociação.</p>

    </main>

    <script src="<?php echo base_url('assets/js/client/renegociation.js') ?>"></script>
    <?= $this->endSection(); ?>
</div>