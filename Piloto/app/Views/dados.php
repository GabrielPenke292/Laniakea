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
            <div class="row">
                <h2 class="text-center">Alguns dados oficiais do projeto:</h2>
            </div>

            <div class="dados-oficiais mt-3">
                <div class="col-md-4">
                    <div class="card text-center mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 45px; color: #eb5d1e;" >45</h5>
                            <p class="card-text">Pessoas oficialmente registradas.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <?php } ?>

</main>