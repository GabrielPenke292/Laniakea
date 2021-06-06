<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->include('template/head') ?>
</head>
<body id="register-screen">  
<div class="container">
        <div class="row text-center justify-content-center" style='margin-top: 45px;'>
            <div class="col-md-4 col-md-offset-4">
                <h4>Cadastro</h4><hr>
                <form action="register-user" method="post" class='register-form' >
                    <?= csrf_field(); ?>
                    
                    <?php if(!empty(session()->getFlashdata('fail'))) :?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    
                    <?php if(!empty(session()->getFlashdata('success'))) :?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif?>
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name='name' placeholder="Nome Completo" value=''>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : "" ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name='email' placeholder="Email" value="">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : "" ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Senha</label>
                        <input type="password" class="form-control" name='password' placeholder="Digite a senha">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : "" ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Confirmar Senha</label>
                        <input type="password" class="form-control" name='cpassword' placeholder="Repita a senha">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : "" ?></span>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                    </div>
                </form>
                <i class="fas fa-arrow-circle-left"></i>
            </div>
        </div>
    </div>
</body>
</html>