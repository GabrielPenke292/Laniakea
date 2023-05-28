<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-2">Qual valor você quer transferir?</h5>

        <!-- Horizontal Form -->
        <form class="mt-3">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Informe o valor</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" min="0" class="form-control" id="valueInput" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">data</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dateInput" value="<?php echo date('Y-m-d') ?>">
                </div>
            </div>
            
            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="app.avancarProximaTab('value', 'account')">Avançar</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>