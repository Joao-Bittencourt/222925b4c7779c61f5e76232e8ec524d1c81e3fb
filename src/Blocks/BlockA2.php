<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;
use IsmaelAdriano\PAFNFCe\Common\BlockInterface;

final class BlockA2 extends Block implements BlockInterface
{
    public $elements = [
        'a2' => ['class' => Elements\A2::class, 'level' => 0, 'type' => 'single'],
    ];
}
