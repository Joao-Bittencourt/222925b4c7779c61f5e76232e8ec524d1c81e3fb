<?php

namespace IsmaelAdriano\PAFNFCe\Tests;

use IsmaelAdriano\PAFNFCe\Arquivos\ArquivoI;
use PHPUnit\Framework\TestCase;
use stdClass;

class ArquivoITest extends TestCase {

    public function testArquivoI() {
        $std = new stdClass();
        $std->U1 = new stdClass();
        $std->U1->CNPJ = '26607235000130';
        $std->U1->IE = '1257775242';
        $std->U1->IM = '';
        $std->U1->RAZAO_SOCIAL = 'Teste NFCe SC';
        
        $std->A2[0] = new stdClass();
        $std->A2[0]->DATA = '27022021';
        $std->A2[0]->MEIO_PAGAMENTO = 'Dinheiro';
        $std->A2[0]->CODIGO_DOCUMENTO = '1';
        $std->A2[0]->VALOR = 31000;
        $std->A2[0]->CNPJ = '';
        $std->A2[0]->NUMERO_DOCUMENTO = 0;
        
        $std->A2[1] = new stdClass();
        $std->A2[1]->DATA = '27022021';
        $std->A2[1]->MEIO_PAGAMENTO = 'Cheque';
        $std->A2[1]->CODIGO_DOCUMENTO = '2';
        $std->A2[1]->VALOR = 32000;
        $std->A2[1]->CNPJ = '';
        $std->A2[1]->NUMERO_DOCUMENTO = 1;
        
        $resp = new ArquivoI($std);
        
        $respU1 = ("{$resp->std->U1}");
        $expectedU1 = 'U1266072350001301257775242                  Teste NFCe SC                                     ';
       
        $respA2Ar0 = ("{$resp->std->A2[0]}");
        $expectedA2Ar0 = 'A227022021Dinheiro                 1000000031000              0000000000';
        
        $respA2Ar1 = ("{$resp->std->A2[1]}");
        $expectedA2Ar1 = 'A227022021Cheque                   2000000032000              0000000001';
        
        $this->assertEquals($expectedU1, $respU1);
        $this->assertEquals($expectedA2Ar0, $respA2Ar0);
        $this->assertEquals($expectedA2Ar1, $respA2Ar1);

    }

    public function testGeraArquivo() {
        $std = new stdClass();
        $std->U1 = new stdClass();
        $std->U1->CNPJ = '26607235000130';
        $std->U1->IE = '1257775242';
        $std->U1->IM = '';
        $std->U1->RAZAO_SOCIAL = 'Teste NFCe SC';
        
        $std->A2[0] = new stdClass();
        $std->A2[0]->DATA = '27022021';
        $std->A2[0]->MEIO_PAGAMENTO = 'Dinheiro';
        $std->A2[0]->CODIGO_DOCUMENTO = '1';
        $std->A2[0]->VALOR = 31000;
        $std->A2[0]->CNPJ = '';
        $std->A2[0]->NUMERO_DOCUMENTO = 0;
        
        $std->A2[1] = new stdClass();
        $std->A2[1]->DATA = '27022021';
        $std->A2[1]->MEIO_PAGAMENTO = 'Cheque';
        $std->A2[1]->CODIGO_DOCUMENTO = '2';
        $std->A2[1]->VALOR = 32000;
        $std->A2[1]->CNPJ = '';
        $std->A2[1]->NUMERO_DOCUMENTO = 1;
        
        $resp = new ArquivoI($std);
                
        $arquivo = $resp->geraArquivo();
        
        $expected = [];
        $expected[] = 'U1266072350001301257775242                  Teste NFCe SC                                     ';
        $expected[] = 'A227022021Dinheiro                 1000000031000              0000000000';
        $expected[] = 'A227022021Cheque                   2000000032000              0000000001';
        $expected = implode(PHP_EOL, $expected);
        $expected .= PHP_EOL;
        
        
        $this->assertEquals($expected, $arquivo);

    }
}
