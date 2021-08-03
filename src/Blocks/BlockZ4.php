<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockZ4 extends Block
{
    public $elements = [
        'z4' => ['class' => Elements\Z4::class, 'level' => 0, 'type' => 'single'],
    ];
}
