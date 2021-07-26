<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->include('templates/adm-head')?>
</head>
<body>
    <h2 class="text-success">Ativar / Reativar Conta</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="numero_conta" class="form-label">Número da conta</label>
                    <input type="number" class="form-control" id="numero_conta" placeholder="Numero da Conta">
                </div>
            </div>
            
            <div class="col-12">
                <div class="mb-3">
                    <label for="senha" class="form-label">Nova senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Digite a nova senha">
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="c_senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="c_senha" placeholder="Confirme a nova senha">
                </div>
            </div>
            
            <div class="col-12">
                <div class="mb-3 text-center ">
                    <div class="col-6 w-100">
                        <button type="button" id="ativar_conta" class="btn btn-primary w-75">Ativar</button>
                    </div>
                </div>
            </div>

            <div class="col-12 text-end">
                <a href="<?= BASE_URL?>administrativo" class="pr-5">Voltar</a>
            </div>

        </div><!-- row -->

    </div><!-- container fluid -->
    
</body>
</html>