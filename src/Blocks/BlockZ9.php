<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockZ9 extends Block
{
    public $elements = [
        'z9' => ['class' => Elements\Z9::class, 'level' => 0, 'type' => 'single'],
    ];
}
