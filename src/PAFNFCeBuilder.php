<?php

namespace IsmaelAdriano\PAFNFCe;

use IsmaelAdriano\PAFNFCe\Blocks\BlockA2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockU1;
use IsmaelAdriano\PAFNFCe\Blocks\BlockP2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockE2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockD2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockD3;
use IsmaelAdriano\PAFNFCe\Blocks\BlockD4;
use IsmaelAdriano\PAFNFCe\Blocks\BlockEAD;
use IsmaelAdriano\PAFNFCe\Blocks\BlockJ1;
use IsmaelAdriano\PAFNFCe\Blocks\BlockJ2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockZ1;
use IsmaelAdriano\PAFNFCe\Blocks\BlockZ2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockZ3;
use IsmaelAdriano\PAFNFCe\Blocks\BlockZ4;
use IsmaelAdriano\PAFNFCe\Blocks\BlockZ9;
use IsmaelAdriano\PAFNFCe\PAFNFCe;

final class PAFNFCeBuilder extends PAFNFCe
{
    protected $possibles = [
        'blocku1' => ['class' => BlockU1::class, 'order' => 1],
        'blocka2' => ['class' => BlockA2::class, 'order' => 2],
        'blockp2' => ['class' => BlockP2::class, 'order' => 3],
        'blocke2' => ['class' => BlockE2::class, 'order' => 4],
        'blockd2' => ['class' => BlockD2::class, 'order' => 5],
        'blockd3' => ['class' => BlockD3::class, 'order' => 6],
        'blockd4' => ['class' => BlockD4::class, 'order' => 7],
        'blockj1' => ['class' => BlockJ1::class, 'order' => 8],
        'blockj2' => ['class' => BlockJ2::class, 'order' => 9],
        'blockz1' => ['class' => BlockZ1::class, 'order' => 10],
        'blockz2' => ['class' => BlockZ2::class, 'order' => 11],
        'blockz3' => ['class' => BlockZ3::class, 'order' => 12],
        'blockz4' => ['class' => BlockZ4::class, 'order' => 13],
        'blockz9' => ['class' => BlockZ9::class, 'order' => 14],
        'blockead' => ['class' => BlockEAD::class, 'order' => 15],
    ];
}
