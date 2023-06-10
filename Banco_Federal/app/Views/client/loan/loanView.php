<div class="col-md-3">
    <?= $this->extend('template-client/layout'); ?>

</div>
<div class="col-md-9">
    <?= $this->section('content'); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3">
            <div class="card-body">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home"  role="tab" aria-controls="nav-home" aria-selected="true"href="#">Dados</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" href="#">Simulação</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" href="#">Confirmação</a>
                    
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">1</div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
                </div>
            
            </div>
        </div>


    </main>



    <?= $this->endSection(); ?>
</div>