<?php

namespace joaobitencourt\nchmetqyrzulkopijdswgvbafx\Blocks;

use joaobitencourt\nchmetqyrzulkopijdswgvbafx\Elements;
use joaobitencourt\nchmetqyrzulkopijdswgvbafx\Common\Block;
use joaobitencourt\nchmetqyrzulkopijdswgvbafx\Common\BlockInterface;

final class BlockA2 extends Block implements BlockInterface
{
    public $elements = [
        'a2' => ['class' => Elements\A2::class, 'level' => 0, 'type' => 'single'],
    ];
}
