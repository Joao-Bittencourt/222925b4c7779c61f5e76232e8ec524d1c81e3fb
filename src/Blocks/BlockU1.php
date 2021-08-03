<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockU1 extends Block
{
    public $elements = [
        'u1' => ['class' => Elements\U1::class, 'level' => 0, 'type' => 'single'],
    ];
}
