<?php

namespace IsmaelAdriano\PAFNFCe\Elements;

use IsmaelAdriano\PAFNFCe\Common\Element;
use IsmaelAdriano\PAFNFCe\Common\ElementInterface;
use \stdClass;

class E2 extends Element implements ElementInterface
{
    const REGISTRO = 'E2';

    protected $parameters = [
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => true,
            'info' => 'CNPJ do estabelecimento usuário do PAF- NFC-e',
            'format' => '',
            'length' => 14
        ],
        'CODIGO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Código da mercadoria ou serviço cadastrado na tabela a que se refere o Requisito XIII deste Anexo',
            'format' => 'totalNumber',
            'length' => 14
        ],
        'CEST' => [
            'type' => 'string',
            'regex' => '^.{1,7}$',
            'required' => false,
            'info' => 'Código Especificador da Substituição Tributária ',
            'format' => 'empty',
            'length' => 7
        ],
        'NCM' => [
            'type' => 'string',
            'regex' => '^.{1,8}$',
            'required' => false,
            'info' => 'Nomenclatura Comum do Mercosul Sistema Harmonizado',
            'format' => 'empty',
            'length' => 8
        ],
        'DESCRICAO' => [
            'type' => 'string',
            'regex' => '^.{1,50}$',
            'required' => true,
            'info' => 'Descrição da Mercadoria ou serviço cadastrado na tabela a que se refere o Requisito XIII deste Anexo',
            'format' => 'empty',
            'length' => 50
        ],
        'UNIDADE' => [
            'type' => 'string',
            'regex' => '^.{1,6}$',
            'required' => true,
            'info' => 'Unidade de medida cadastrada na tabela a que se refere o Requisito XIII deste Anexo',
            'format' => '',
            'length' => 6
        ],
        'MENSURACAO' => [
            'type' => 'string',
            'regex' => '^.{1,1}$',
            'required' => true,
            'info' => 'Informação de estoque positivo (+) ou negativo (-)',
            'format' => '',
            'length' => 1
        ],
        'QUANTIDADE' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Quantidade da mercadoria ou produto constante no estoque, com três casas decimais',
            'format' => 'totalNumber',
            'length' => 9
        ],
        'DATA_EMISSAO' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12][0]\d{2})$',
            'required' => true,
            'info' => 'Data em que o arquivo foi solicitado',
            'format' => '',
            'length' => 8
        ],
        'DATA_ESTOQUE' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12][0]\d{2})$',
            'required' => true,
            'info' => 'Data da posição do estoque',
            'format' => '',
            'length' => 8
        ],
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REGISTRO);
        $this->std = $this->standarize($std);
    }
}
