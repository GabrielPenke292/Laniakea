<?= $this->extend('template/layout'); ?>



<header>
    <?= $this->include('template/navbar'); ?>

</header>


<main class="mt-5">
    <?php $manutencao = false; ?>
    <?php if ($manutencao) { ?>
        <?= $this->include('manutencao'); ?>

    <?php } else { ?>
        <div class="container">

            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">SLCP</div>
                        Sistema Laniaker de cadastramento de pessoas
                    </div>
                    <a href="https://slcp.laniakea.dev.br">Acessar</a>
                </li>

            </ol>
        </div>
    <?php } ?>

</main>