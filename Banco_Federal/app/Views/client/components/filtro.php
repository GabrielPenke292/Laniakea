<div class="row mb-3">
    <div class="col-md-4">
        <label for="inputDate" class="col-form-label" >Date Inicial</label>
        <input type="date" class="form-control" name="inicial-date" id="startDate" value="<?= $data->startDate ?? null ?>">
    </div>
    
    <div class="col-md-4">
        <label for="inputDate" class="col-form-label">Date Final</label>
        <input type="date" class="form-control" name="final-date" id="finalDate" value="<?= $data->finalDate ?? null ?>">
    </div>

    <div class="col-md-4 d-flex align-items-end" >
    <button type="button" class="btn btn-info" onclick="app.filterExtract()">Filtrar</button>
</div>

</div>

