<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockD2 extends Block
{
    public $elements = [
        'd2' => ['class' => Elements\D2::class, 'level' => 0, 'type' => 'single'],
    ];
}
