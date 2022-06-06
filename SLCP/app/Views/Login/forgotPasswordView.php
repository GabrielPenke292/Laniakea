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
        <h1>Forgot</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="form-login text-white">
                    <form method="post" action="check">
                        <div class="form-group mb-2">
                            <label for="mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div><!-- form login -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
    
</body>
</html>