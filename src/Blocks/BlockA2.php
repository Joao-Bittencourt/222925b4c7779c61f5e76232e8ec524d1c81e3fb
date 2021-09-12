<?php

namespace joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Blocks;

use joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Elements;
use joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Common\Block;
use joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Common\BlockInterface;

final class BlockA2 extends Block implements BlockInterface
{
    public $elements = [
        'a2' => ['class' => Elements\A2::class, 'level' => 0, 'type' => 'single'],
    ];
}
