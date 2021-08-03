<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockZ2 extends Block
{
    public $elements = [
        'z2' => ['class' => Elements\Z2::class, 'level' => 0, 'type' => 'single'],
    ];
}
