<?php

namespace IsmaelAdriano\PAFNFCe\Arquivos;

use IsmaelAdriano\PAFNFCe\Common\Arquivo;
use IsmaelAdriano\PAFNFCe\Common\ArquivoInterface;
use \stdClass;

class ArquivoI extends Arquivo implements ArquivoInterface {

    const REGISTRO = 'ArquivoI';

    protected $parameters = [
        'U1',
        'A2',
        'P2',
        'E2',
        'D2',
        'D3',
        'D4',
        'S2',
        'S3',
        'J1',
        'J2',
//        EAD
        
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std) {
        parent::__construct(self::REGISTRO);
        $this->std = $this->standarize($std);
    }

}
