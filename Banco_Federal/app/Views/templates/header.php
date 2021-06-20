<header>
    <div class="top-header p-2">
        <div class="container">
            <div class="row top-header-row">
                <div class="col-12 text-center d-flex justify-content-center">
                    <div class="logo">
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- top header -->

    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 text-right d-flex justify-content-center ">
                    <form action="" class="login-form p-2 w-100 rounded" >
                        <div class="row d-flex ">
                            <div class="col-6 agencia-side text-right ">
                                <div class="row">
                                    <div class="col-3">
                                        <label>Agência</label>                            
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control-sm" id='agencia'>
                                    </div>
                                </div>
                            </div><!-- col agencia side -->
                            
                            <div class="col-6 conta-side">
                                <div class="row">
                                    <div class="col-3">
                                        <label for="">Conta</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control-sm" id='conta'>
                                    </div>
                                </div><!-- row -->
                            </div><!-- col conta side -->
                        </div><!-- row -->
                    </form>
                </div><!-- col -->
                <div class="col-3 text-right pt-3">
                    <a href="<?= BASE_URL ?>administrativo">Área administrativa</a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- bottom-header -->
</header>