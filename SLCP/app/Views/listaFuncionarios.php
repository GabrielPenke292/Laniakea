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
                            <td id="nomeFunc"><?= $funcionario["PES_NOME"] ?></td> 
                            <td id="emailFunc"><?= $funcionario["FUNCIONARIO_EMAIL"] ?></td>
                            <td>
                                <button type="button" id="editarFuncionarioBtn" onclick="openModal(<?= $funcionario['FUNCIONARIO_ID'] ?>, '<?= $funcionario['PES_NOME'] ?>', '<?= $funcionario['FUNCIONARIO_EMAIL'] ?>')" class="btn btn-primary">Editar</button>
                            </td>
                        </tr>
                    <?php } ?>    
                    
                </table>

            </div>
        </div><!-- row -->    
    </div><!-- container fluid -->

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Informações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body">
        <form action="">
            <input type="text" class="d-none" id="idFuncionario">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="editarFuncionario();">Salvar alterações</button>
      </div>
    </div>
  </div>
</div>


<script src="assets/js/script.js"></script>
</body> 
</html>

