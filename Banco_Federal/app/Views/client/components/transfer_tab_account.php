<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-2">Para quem você quer transferir?</h5>

        <!-- Horizontal Form -->
        <form class="mt-3">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Banco</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="valueInput" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Agencia</label>
                <div class="col-sm-10">
                    <input type="number" step="1" min="1"  class="form-control" id="valueInput" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Conta</label>
                <div class="col-sm-10">
                    <input type="number" step="1" min="1" class="form-control" id="valueInput" required>
                </div>
            </div>
            
            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="app.voltarTab('account', 'value')">Voltar</button>
                <button type="button" class="btn btn-primary" onclick="app.avancarProximaTab('account', 'confirmation')">Avançar</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>