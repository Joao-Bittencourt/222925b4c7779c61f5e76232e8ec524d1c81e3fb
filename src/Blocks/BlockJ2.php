<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockJ2 extends Block
{
    public $elements = [
        'j2' => ['class' => Elements\J2::class, 'level' => 0, 'type' => 'single'],
    ];
}
