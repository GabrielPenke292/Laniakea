<?php

namespace App\Models\payments;

use CodeIgniter\Model;

class BilletsModel extends Model
{
    protected $table      = 'boletos';
    protected $primaryKey = 'BOLETO_ID';
    protected $allowedFields = [
        'BOLETO_NOSSO_NUM',
        'BOLETO_DATA_EMISSAO',
        'BOLETO_COD_BANCO',
        'BOLETO_TIPO_PESSOA_EMISSOR',
        'BOLETO_TIPO_PESSOA_PAGADOR',
        'BOLETO_COD_BARRAS',
        'BOLETO_VENCIMENTO',
        'BOLETO_VALOR',
        'BOLETO_BENEFICIARIO',
        'BOLETO_PAGADOR',
        'BOLETO_JUROS',
        'BOLETO_STATUS',
    ];

    

}