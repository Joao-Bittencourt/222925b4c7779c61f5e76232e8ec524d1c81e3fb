<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockEAD extends Block
{
    public $elements = [
        'ead' => ['class' => Elements\EAD::class, 'level' => 0, 'type' => 'single'],
    ];
}
