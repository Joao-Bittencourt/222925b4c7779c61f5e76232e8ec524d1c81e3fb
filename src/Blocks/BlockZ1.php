<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockZ1 extends Block
{
    public $elements = [
        'z1' => ['class' => Elements\Z1::class, 'level' => 0, 'type' => 'single'],
    ];
}
