<div class="bg-secondary" id="outras-opcoes">   
    <div class="container-fluid">
        <div class="row">
            
            <div class="col mt-3 text-white mt-5 top-sidebar">
                
                <p>Bem-vindo(a), <?= $userName ?></p>
                
                <div class="link-logout text-right mb-3">
                    <a href="logout">Sair</a>
                </div><!-- link logout -->
                <div class="clear"></div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <ul class="list-group w-100 side-list">
                <li class="list-group-item"><a href="cadastro-usuario">Cadastrar novo usuário</a></li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item"><a href="listagem">Listagem de funcionários</a></li>
                <li class="list-group-item"><a href="<?= WORLD_URL ?>governo/public">Site do Governo</a></li>
            </ul>
        </div> <!-- row -->
    </div><!-- container fluid -->
</div><!-- outras opções -->