<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->include('template/head') ?>
</head>
<body id="login-screen">   
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="title-login mt-5 text-white">
                    <h1>Sistema Laniaker de Cadastramento de Pessoas</h1>        
                </div>
            </div><!-- col -->
        </div><!-- row -->

        <div class="row">
            <div class="col-md-4">
                <div class="form-login text-white">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div><!-- form login -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
    
</body>
</html>