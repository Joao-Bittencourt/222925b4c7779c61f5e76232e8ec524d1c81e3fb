<?php

namespace IsmaelAdriano\PAFNFCe\Tests;

use IsmaelAdriano\PAFNFCe\Elements\D2;
use PHPUnit\Framework\TestCase;
use stdClass;

class D2Test extends TestCase
{
    public function testD2()
    {
        $std = new stdClass();
        $std->CNPJ = '23379897000101';
        $std->NUMERO = '0000000001';
        $std->DATA = '03022021';
        $std->TITULO = 'PEDIDO';
        $std->VALOR_TOTAL = 11100;
        $std->CLIENTE = 'ANDREIA SALETE SCHIENEMAYER';
        $std->CNPJ_CLIENTE = '00006660598960';
        $b1 = new D2($std);
        $resp = "{$b1}";

        $expected = 'D223379897000101000000000000103022021PEDIDO                        00011100ANDREIA SALETE SCHIENEMAYER             00006660598960';

        $this->assertEquals($expected, $resp);
    }
}
