<ul class="nav nav-tabs" id="transfer_tabs" role="tablist">
    <li class="nav-item mr-2" role="presentation">
        <button class="nav-link active" id="value-tab" data-toggle="tab" data-target="#value" type="button" role="tab" aria-controls="value" aria-selected="true">Valor</button>
    </li>
    <li class="nav-item mr-2" role="presentation">
        <button class="nav-link" id="account-tab" data-toggle="tab" data-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Dados da conta</button>
    </li>
    <li class="nav-item mr-2" role="presentation">
        <button class="nav-link" id="confirmation-tab" data-toggle="tab" data-target="#confirmation" type="button" role="tab" aria-controls="confirmation" aria-selected="false">Confirmação</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
  
    <div class="tab-pane fade show active" id="value" role="tabpanel" aria-labelledby="value-tab">
      <?= $this->include('client/components/transfer_tab_value'); ?>
    </div>

    <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
      <?= $this->include('client/components/transfer_tab_account'); ?>
    </div>
    <div class="tab-pane fade" id="confirmation" role="tabpanel" aria-labelledby="confirmation-tab">
      <?= $this->include('client/components/transfer_tab_confirmation'); ?>
    </div>
</div>