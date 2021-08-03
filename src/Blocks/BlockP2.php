<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockP2 extends Block
{
    public $elements = [
        'p2' => ['class' => Elements\P2::class, 'level' => 0, 'type' => 'single'],
    ];
}
