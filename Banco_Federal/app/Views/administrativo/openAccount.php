<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <title>BFL - Área Administrativo - Abertura de Conta</title>
</head>
<body>
    <div class="container">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h2>Abertura de conta</h2>        
            </div>
        </div><!-- row -->

        <div class="row">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome">
                </div>
                <div class="col-md-6">
                    <label for="identidade" class="form-label">Identidade</label>
                    <input type="text" class="form-control" id="intentidade">
                </div>
                <div class="col-6">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="">
                </div>
                <div class="col-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <select class="form-select" id="cidade">
                        <option selected>Escolha</option>
                        <option value="">..</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="uf" class="form-label">UF</label>
                    <select class="form-select" id="uf">
                        <option selected>Escolha..</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ocupacao" class="form-label">Ocupação</label>
                    <input type="text" class="form-control" id="ocupacao">
                </div> 
                <div class="col-md-6">
                    <label for="salario" class="form-label">Salário</label>
                    <input type="number" step="0.01" value="0.00" placeholder="0.00" class="form-control" id="salario">
                </div> 


                <div class="col-md-4">
                    <label for="comprovanteResidencia" class="form-label">Comprovante de Residência</label>
                    <input class="form-control" type="file" id="comprovanteResidencia">
                </div>
                <div class="col-md-4">
                    <label for="copiaIdentidade" class="form-label">Copia da Identidade</label>
                    <input class="form-control" type="file" id="comprovanteRenda">
                </div>
                <div class="col-md-4">
                    <label for="comprovanteRenda" class="form-label">Comprovante de renda</label>
                    <input class="form-control" type="file" id="comprovanteRenda">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Criar Conta</button>
                </div>
            </form>
        </div><!-- row -->
    </div>
</body>
</html>