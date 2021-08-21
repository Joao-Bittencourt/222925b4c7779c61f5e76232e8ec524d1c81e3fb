<?php

namespace IsmaelAdriano\PAFNFCe\Tests;

use IsmaelAdriano\PAFNFCe\Arquivos\ArquivoI;
use PHPUnit\Framework\TestCase;
use stdClass;

class ArquivoITest extends TestCase {

    public function testArquivoI() {
        $std = new stdClass();

        $b1 = new ArquivoI($std);
        $resp = $b1;
        print_r($resp);
//        $this->assertIsObject($resp);
//        $this->assertCount(8,);
    }

}
