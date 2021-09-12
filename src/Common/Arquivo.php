<?php

namespace joaobitencourt\nchmetqyrzulkopijdswgvbafx\Common;

use joaobitencourt\nchmetqyrzulkopijdswgvbafx\Common\ArquivoInterface;
use \stdClass;

abstract class Arquivo implements ArquivoInterface {

    const PAF_EOL = "\r\n";

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
        $newStd = new stdClass();
        foreach ($this->parameters as $parameter) {

            if (empty($std->$parameter)) {
                continue;
            }

            switch (true) {
                case is_array($std->$parameter) :
                    $newStd->{$parameter} = $this->arBuildElement($parameter, $std);
                    break;
                default :
                    $newStd->{$parameter} = $this->buildElement($parameter, $std);
            }
        }

        $this->values = $newStd;

        return $newStd;
    }

    protected function buildElement($element, \stdClass $std) {

        switch ($element) {
            case 'U1':
            case 'A2':
            case 'P2':
            case 'E2':
            case 'D2':
            case 'D3':
            case 'D4':
            case 'S2':
            case 'S3':
            case 'J1':
            case 'J2':
            case 'U1':
                $ClassElement = 'joaobitencourt\nchmetqyrzulkopijdswgvbafx\Elements\\' . $element;
                if (class_exists($ClassElement)) {
                    return new $ClassElement($std->$element);
                }
                throw new Exception("Elements::{$element} não existe.");
        }

        return $std;
    }

    protected function arBuildElement($element, \stdClass $std) {
        $arElements = [];
        switch ($element) {
            case 'U1':
            case 'A2':
            case 'P2':
            case 'E2':
            case 'D2':
            case 'D3':
            case 'D4':
            case 'S2':
            case 'S3':
            case 'J1':
            case 'J2':
            case 'U1':
                $ClassElement = 'joaobitencourt\nchmetqyrzulkopijdswgvbafx\Elements\\' . $element;
                if (class_exists($ClassElement)) {


                    foreach ($std->$element as $elementKey => $elementData) {

                        $arElements[] = new $ClassElement($std->$element[$elementKey]);
                    }

                    return $arElements;
                }
                throw new Exception("Elements::{$element} não existe.");
        }

        return $std;
    }

    public function geraArquivo() {
        if (empty($this->values)) {
            throw new Exception("Propriedade values não preenchido.");
        }

        $data = [];
        foreach ($this->values as $element) {


            if (is_array($element)) {
                foreach ($element as $elementData) {
                    $data[] = "{$elementData}";
                }
                continue;
            }
            $data[] = "{$element}";
        }

        $data = implode(self::PAF_EOL, $data);
        $data .= self::PAF_EOL;

        return $data;
    }

}
