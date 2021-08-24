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
        
        $std->P2[0] = new stdClass();
        $std->P2[0]->CNPJ = '23379897000101';
        $std->P2[0]->CODIGO = 1;
        $std->P2[0]->CEST = '';
        $std->P2[0]->NCM = '19059090';
        $std->P2[0]->DESCRICAO = 'Produto 1';
        $std->P2[0]->UNIDADE = 'KG';
        $std->P2[0]->IAT = 'A';
        $std->P2[0]->IPPT = 'T';
        $std->P2[0]->ST = 'T';
        $std->P2[0]->ALIQUOTA = '07';
        $std->P2[0]->VALOR_UNITARIO = 10000;
        
        $std->P2[1] = new stdClass();
        $std->P2[1]->CNPJ = '23379897000101';
        $std->P2[1]->CODIGO = 2;
        $std->P2[1]->CEST = '';
        $std->P2[1]->NCM = '19059091';
        $std->P2[1]->DESCRICAO = 'Produto 2';
        $std->P2[1]->UNIDADE = 'KG';
        $std->P2[1]->IAT = 'A';
        $std->P2[1]->IPPT = 'T';
        $std->P2[1]->ST = 'T';
        $std->P2[1]->ALIQUOTA = '08';
        $std->P2[1]->VALOR_UNITARIO = 20000;
        
        $resp = new ArquivoI($std);
        
        $respU1 = ("{$resp->std->U1}");
        $expectedU1 = 'U1266072350001301257775242                  Teste NFCe SC                                     ';
       
        $respA2Ar0 = ("{$resp->std->A2[0]}");
        $expectedA2Ar0 = 'A227022021Dinheiro                 1000000031000              0000000000';
        
        $respA2Ar1 = ("{$resp->std->A2[1]}");
        $expectedA2Ar1 = 'A227022021Cheque                   2000000032000              0000000001';
        
        $respP2Ar0 = ("{$resp->std->P2[0]}");
        $expectedP2Ar0 = 'P22337989700010100000000000001       19059090Produto 1                                         KG    ATT0700000000010000';
        
        $respP2Ar1 = ("{$resp->std->P2[1]}");
        $expectedP2Ar1 = 'P22337989700010100000000000002       19059091Produto 2                                         KG    ATT0800000000020000';
        
        $this->assertEquals($expectedU1, $respU1);
        
        $this->assertEquals($expectedA2Ar0, $respA2Ar0);
        $this->assertEquals($expectedA2Ar1, $respA2Ar1);
        
        $this->assertEquals($expectedP2Ar0, $respP2Ar0);
        $this->assertEquals($expectedP2Ar1, $respP2Ar1);

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
        
        $std->P2[0] = new stdClass();
        $std->P2[0]->CNPJ = '23379897000101';
        $std->P2[0]->CODIGO = 1;
        $std->P2[0]->CEST = '';
        $std->P2[0]->NCM = '19059090';
        $std->P2[0]->DESCRICAO = 'Produto 1';
        $std->P2[0]->UNIDADE = 'KG';
        $std->P2[0]->IAT = 'A';
        $std->P2[0]->IPPT = 'T';
        $std->P2[0]->ST = 'T';
        $std->P2[0]->ALIQUOTA = '07';
        $std->P2[0]->VALOR_UNITARIO = 10000;
        
        $std->P2[1] = new stdClass();
        $std->P2[1]->CNPJ = '23379897000101';
        $std->P2[1]->CODIGO = 2;
        $std->P2[1]->CEST = '';
        $std->P2[1]->NCM = '19059091';
        $std->P2[1]->DESCRICAO = 'Produto 2';
        $std->P2[1]->UNIDADE = 'KG';
        $std->P2[1]->IAT = 'A';
        $std->P2[1]->IPPT = 'T';
        $std->P2[1]->ST = 'T';
        $std->P2[1]->ALIQUOTA = '08';
        $std->P2[1]->VALOR_UNITARIO = 20000;
        
        $resp = new ArquivoI($std);
                
        $arquivo = $resp->geraArquivo();
        
        $expected = [];
        $expected[] = 'U1266072350001301257775242                  Teste NFCe SC                                     ';
        $expected[] = 'A227022021Dinheiro                 1000000031000              0000000000';
        $expected[] = 'A227022021Cheque                   2000000032000              0000000001';
        $expected[] = 'P22337989700010100000000000001       19059090Produto 1                                         KG    ATT0700000000010000';
        $expected[] = 'P22337989700010100000000000002       19059091Produto 2                                         KG    ATT0800000000020000';
        
        $expected = implode("\r\n", $expected);
        $expected .= "\r\n";
        
        
        $this->assertEquals($expected, $arquivo);

    }
}
