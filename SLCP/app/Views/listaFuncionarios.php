<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('template/head') ?>
</head>
<body id="listaFuncionarios-page">
    <div class="container-fluid">
        <div class='d-flex justify-content-center text-white'>
            <h1 id="title-site">SLCP</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= $this->include('template/sidebar') ?>
            </div><!-- col -->

            <div class="col-md-6">
                <ul>
                    <?php foreach ($funcionarios as $funcionario) { ?>
                        <li><?= $funcionario["PES_NOME"] ?> || <?= $funcionario["FUNCIONARIO_EMAIL"] ?></li>
                    <?php } ?>
                </ul>        
            </div>
        </div><!-- row -->    
    </div><!-- container fluid -->
    
</body> 
</html>