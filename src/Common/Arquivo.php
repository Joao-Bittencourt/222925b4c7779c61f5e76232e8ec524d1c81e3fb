<?php

namespace IsmaelAdriano\PAFNFCe\Common;

use IsmaelAdriano\PAFNFCe\Common\ArquivoInterface;
use \stdClass;

abstract class Arquivo implements ArquivoInterface {

    public $std;
    public $values;
    protected $parameters;
    private $reg;

    public function __construct($reg) {
        $this->reg = $reg;
        $this->values = new stdClass();
    }

    public function postValidation() {
        return true;
    }

    protected function standarize(\stdClass $std) {
        if (empty($this->parameters)) {
            throw new Exception('Parametros não estabelecidos na classe');
        }
        
        foreach ($this->parameters as $paramenter) {
            print_r($paramenter);            die();
        }
        $newStd = $std;
        
        return $newStd;
    }
    
    protected function  buildElement($element, \stdClass $std) {
        
    }
    

}
