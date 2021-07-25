<option selected readonly>Escolha...</option>
<?php foreach ($cidades as $cidade) { ?>
    <option value="<?= $cidade->CIDADE_ID ?>"> <?= $cidade->CIDADE_NOME ?> </option>
<?php } ?>