<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockJ1 extends Block
{
    public $elements = [
        'j1' => ['class' => Elements\J1::class, 'level' => 0, 'type' => 'single'],
    ];
}
