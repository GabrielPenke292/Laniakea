<div class="confirmation-container">
  <h3 class="confirmation-heading">Confirmação de Empréstimo</h3>
  <hr>
  <p class="confirmation-text">Por favor, revise os detalhes do seu empréstimo antes de prosseguir:</p>
  <ul class="confirmation-list">
    <li class="confirmation-item">
      <span class="confirmation-label">Valor do Empréstimo:</span>
      <span class="confirmation-value">R$<?= number_format($loanAmount, 2, ',', '.') ?></span>
    </li>
    <li class="confirmation-item">
      <span class="confirmation-label">Duração do Empréstimo:</span>
      <span class="confirmation-value"><?= $loanDuration ?> meses</span>
    </li>
    <li class="confirmation-item">
      <span class="confirmation-label">Taxa de Juros:</span>
      <span class="confirmation-value"><?= $interestRate ?>%</span>
    </li>
  </ul>
  <p class="confirmation-text">Para visualizar e baixar o contrato do empréstimo, clique no link abaixo:</p>
  <a class="download-link" href="<?= $contractUrl ?>" target="_blank">Baixar Contrato</a>
  <br><br>
  <div class="row">
    <div class="col-12 mt-2 d-flex justify-content-center">
      <button class="btn btn-secondary mr-1 text-white" onclick="app.backStep('confirmation','simulation')">Voltar</button>
      <button type="button" class="btn btn-success" onclick="app.confirmLoan()">Confirmar Empréstimo</button>
    </div>
  </div>
</div>