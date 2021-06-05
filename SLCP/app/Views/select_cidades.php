<!-- <option disabled class="bg-secondary">Selecione</option> -->
<?php foreach ($cities as $city) { ?>
    <option value="<?= $city['CIDADE_ID'] ?>"><?= $city['CIDADE_NOME'] ?></option>
<?php } ?> 