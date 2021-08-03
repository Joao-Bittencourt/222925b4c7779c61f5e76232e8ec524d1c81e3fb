<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockD4 extends Block
{
    public $elements = [
        'd4' => ['class' => Elements\D4::class, 'level' => 0, 'type' => 'single'],
    ];
}
