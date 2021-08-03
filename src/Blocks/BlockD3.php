<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockD3 extends Block
{
    public $elements = [
        'd3' => ['class' => Elements\D3::class, 'level' => 0, 'type' => 'single'],
    ];
}
