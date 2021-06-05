<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('template/head') ?>
</head>
<body>
    <main>
        <div class='d-flex justify-content-center'>
            <h1>SLCP</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 " >
                    <div class="bg-secondary" id="outras-opcoes">   
                        [lado A]
                    </div>
                </div>

                <div class="col-md-6 " >
                    <div class='bg-secondary' id="formulario">   
                        <div class="row">
                            <div class="col text-center text-white m-4">
                                <h2>Formulário de Cadastro</h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form action="">
                                        <div class="mb-3 row">
                                            <div class="col-md-1">
                                                <label for="">Nome</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Nome completo" id="name" name="name" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <label for="">Data nasc</label>
                                            </div>
                                            <div class="col">
                                                <input type="date" class="form-control" id="dataNasc" name="dataNasc" placeholder="Data nasc" aria-label="First name">
                                            </div> 

                                            <div class="col-md-1 text-right">
                                                <label for="">UF</label>
                                            </div>
                                            <div class="col-md-2 text-left">
                                                <select class="form-select" aria-label="Default select example" id="uf" onchange='mostra_cidades()'>
                                                    <option selected readonly class="bg-secondary">Selecione</option>
                                                    <?php foreach ($UFs as $UF) { ?>
                                                        <option value="<?= $UF['ESTADO_ID']?>"><?= $UF['ESTADO_SIGLA'] ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>

                                            <div class="col-md-1">
                                                <label for="">Cidade</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" aria-label="Default select example" id="city">
                                                    <option readonly class="bg-secondary">Selecione</option>
                                                    

                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row mt-2">
                                            <div class="col-md-1">
                                                <label for="">Nome Pai</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="fathersName" name="fathersName" class="form-control" placeholder="Nome do pai" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-md-1">
                                                <label for="">Nome Mãe</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="mothersName" name="mothersName" class="form-control" placeholder="Nome da mãe" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <label for="">Nº Cartório</label>
                                            </div>
                                            <div class="col">
                                                <input type="number" required class="form-control" placeholder="Número do cartório" aria-label="First name">
                                            </div> 

                                            <div class="col-md-1">
                                                <label for="">Nº Registro</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" required id='registerNumber' name="registerNumber" readonly class="form-control" placeholder="Número do registro" aria-label="First name">
                                            </div> 
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-1">
                                                <label for="">Cod Usuário</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="Número do cartório" aria-label="First name">
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <a href="cadastrar-pessoa" type="button" class="btn btn-primary">Cadastrar</a>
                                            </div>
                                        </div>
                                        

                                    </form>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="col-md-3 " >
                    <div class="bg-secondary" id='numeros'>   
                        [lado C]
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>