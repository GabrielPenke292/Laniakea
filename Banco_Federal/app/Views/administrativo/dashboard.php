<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->include('template/adm-head')?>
</head>
<body>
    <h1>Área Administrativa</h1>
    <ul>
        <a href="<?= BASE_URL ?>logout/administrativo"><li>Sair</li></a>
        <hr>
        <a href="<?= BASE_URL ?>administrativo/abrir-conta"><li>Abrir Conta</li></a>
        <a href="<?= BASE_URL ?>administrativo/ativ-reativ-conta"><li>Ativar/Reativar Conta</li></a>
        <a href="<?= BASE_URL ?>administrativo/avaliar-credito"><li>Avaliação de Crédito</li></a>
        <a href="<?= BASE_URL ?>administrativo/pagar-conta"><li>Pagar Contas</li></a>
        <a href="<?= BASE_URL ?>administrativo/renegociacao"><li>Renegociação</li></a>
        <a href="<?= BASE_URL ?>administrativo/financiamento"><li>Financiamentos</li></a>
    </ul>
</body>
</html>