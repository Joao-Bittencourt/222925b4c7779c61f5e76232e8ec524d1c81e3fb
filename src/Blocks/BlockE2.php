<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockE2 extends Block
{
    public $elements = [
        'e2' => ['class' => Elements\E2::class, 'level' => 0, 'type' => 'single'],
    ];
}
