<div class="simulation-container">
  <h3 class="simulation-heading">Simulação de Empréstimo</h3><hr>
  <form class="simulation-form">
    <div class="form-group">
      <label for="loan-amount" class="simulation-label">Valor do Empréstimo:</label>
      <input type="text" class="form-control simulation-input" id="loan-amount" name="loan-amount">
    </div>
    <div class="form-group">
      <label for="loan-duration" class="simulation-label">Duração do Empréstimo:</label>
      <input type="text" class="form-control simulation-input" id="loan-duration" name="loan-duration">
    </div>
    <div class="form-group">
      <label for="interest-rate" class="simulation-label">Taxa de Juros:</label>
      <input type="text" class="form-control simulation-input" id="interest-rate" name="interest-rate">
    </div>
    <button type="submit" class="btn btn-primary simulation-button">Calcular</button>
  </form>
  <div class="simulation-result">
    <p class="simulation-text">Com base nos dados fornecidos:</p>
    <ul class="simulation-list">
      <li class="simulation-item">
        <span class="simulation-label">Valor das Parcelas:</span>
        <span class="simulation-value">R$500</span>
      </li>
      <li class="simulation-item">
        <span class="simulation-label">Total Pago de Juros:</span>
        <span class="simulation-value">R$2.000</span>
      </li>
      <li class="simulation-item">
        <span class="simulation-label">Total a Pagar:</span>
        <span class="simulation-value">R$12.000</span>
      </li>
    </ul>
  </div>
</div>
