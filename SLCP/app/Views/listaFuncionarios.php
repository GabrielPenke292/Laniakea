<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('template/head') ?>
</head>
<body id="listaFuncionarios-page">
    <div class="container-fluid">
        <div class='d-flex justify-content-center text-white mb-3'>
            <h1 id="title-site">SLCP</h1>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $this->include('template/sidebar') ?>
            </div><!-- col -->

            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ação</th>
                    </tr>
                    
                    <?php foreach ($funcionarios as $funcionario) { ?>
                        <tr>
                            <td><?= $funcionario["PES_NOME"] ?></td> 
                            <td><?= $funcionario["FUNCIONARIO_EMAIL"] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary">Editar</button>
                            </td>
                        </tr>
                    <?php } ?>    
                    
                </table>

            </div>
        </div><!-- row -->    
    </div><!-- container fluid -->
    
</body> 
</html>