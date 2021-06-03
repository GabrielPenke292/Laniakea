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
                                                <input type="text" class="form-control" placeholder="Nome completo" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <label for="">Data nasc</label>
                                            </div>
                                            <div class="col">
                                                <input type="date" class="form-control" placeholder="Data nasc" aria-label="First name">
                                            </div> 

                                            <div class="col-md-1 text-right">
                                                <label for="">UF</label>
                                            </div>
                                            <div class="col-md-2 text-left">
                                                <input type="text" class="form-control" placeholder="UF" aria-label="Last name" maxlength="2">
                                            </div>

                                            <div class="col-md-1">
                                                <label for="">Cidade</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Cidade" aria-label="Last name">
                                            </div>
                                        </div>

                                        <div class="mb-3 row mt-2">
                                            <div class="col-md-1">
                                                <label for="">Nome Pai</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Nome do pai" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-md-1">
                                                <label for="">Nome Mãe</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Nome da mãe" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <label for="">Nº Cartório</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Número do cartório" aria-label="First name">
                                            </div> 

                                            <div class="col-md-1">
                                                <label for="">Nº Registro</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Número do registro" aria-label="First name">
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
</body>
</html>