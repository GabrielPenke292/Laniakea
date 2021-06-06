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
        <?php if(isset($msg)){?>
            <div class="bg-alert">
                <h2><?= $msg ?></h2>
            </div>
        <?php } ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 " >
                    <div class="bg-secondary" id="outras-opcoes">   
                        <div class="container-fluid">
                            <div class="row">
                                [Aqui entra um imagem]<br>
                                <div class="col">
                                    <p>Bem-vindo(a), <?= $userName ?></p>
                                    <a href="logout">Sair</a>
                                </div>
                            </div>
                            <div class="row">
                                <ul class="list-group w-100">
                                    <li class="list-group-item"><a href="cadastro-usuario">Cadastrar novo usuário</a></li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div> <!-- row -->
                        </div><!-- container fluid -->
                    </div><!-- outras opções -->
                </div><!-- col -->

                <div class="col-md-6 " >
                    <div class='bg-secondary' id="formulario">   
                        <div class="row">
                            <div class="col text-center text-white m-4">
                                <h2>Formulário de Cadastro</h2>
                            </div>
                        </div>
                        <?php if(!empty(session()->getFlashdata('fail'))) :?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        
                        <?php if(!empty(session()->getFlashdata('success'))) :?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif?>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form action="cadastrar-pessoa" method="post">
                                        <div class="mb-3 row">
                                            <div class="col-md-1">
                                                <label for="">Nome</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" placeholder="Nome completo" id="name" name="name" aria-label="First name">
                                            </div>

                                            <div class="col-md-1">
                                                <label for="">Sexo</label>
                                            </div>
                                            <div class="col">
                                                <select name="sexo" id="sexo" required>
                                                    <option readonly value="">Selecione</option>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select>
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
                                                <select class="form-select" aria-label="Default select example" id="uf" name="uf" onchange='mostra_cidades()'>
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
                                                <select class="form-select" aria-label="Default select example" id="city" name="city">
                                                    <option readonly class="bg-secondary">Selecione</option>
                                                    

                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row mt-2">
                                            <div class="col-md-1">
                                                <label for="">Nome Pai</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="fathersName" name="nomePai"  class="form-control" placeholder="Nome do pai" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-md-1">
                                                <label for="">Nome Mãe</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="mothersName" name="nomeMae" class="form-control" placeholder="Nome da mãe" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <label for="">Nº Cartório</label>
                                            </div>
                                            <div class="col">
                                                <input type="number" id="numeroCartorio" min="1" name="numCartorio" required class="form-control" placeholder="Número do cartório" aria-label="First name">
                                            </div> 

                                            <div class="col-md-1">
                                                <label for="">Nº Registro</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" required id='registerNumber' name="numRegistro" readonly class="form-control" placeholder="Número do registro" aria-label="First name">
                                            </div> 
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-1">
                                                <label for="">Cod Usuário</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="number" id="codUsuario" min="1"
                                                name="codUsuario"class="form-control" placeholder="Código do usuário" aria-label="First name">
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <input type="submit" class="btn btn-primary" value="Cadastrar">
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
                                                        
                <div class="col-md-3 " >
                    <div class="row">
                        <div class="bg-secondary col-md-12 text-center p-4 text-white" id='numeros'>   
                            <h4 class="contadorDeRegistros">Já existem <span id="numberPeopleRegistered">0</span> Laniakers no registro oficial</h4>
                        </div>

                        <div class="col-md-12 bg-primary mt-5 text-center text-white p-3">
                            <h4>Última pessoa cadastrada:</h4>
                            <p id="lastRegistered">-</p>
                        </div>
                    </div>
                    
                </div>


            </div><!-- Row -->
        </div><!-- container fluid -->
        
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>