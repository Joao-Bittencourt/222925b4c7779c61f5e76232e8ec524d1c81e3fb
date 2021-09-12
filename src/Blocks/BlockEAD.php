<?php

namespace joaobitencourt\nchmetqyrzulkopijdswgvbafx\Blocks;

use joaobitencourt\nchmetqyrzulkopijdswgvbafx\Elements;
use joaobitencourt\nchmetqyrzulkopijdswgvbafx\Common\Block;

final class BlockEAD extends Block
{
    public $elements = [
        'ead' => ['class' => Elements\EAD::class, 'level' => 0, 'type' => 'single'],
    ];
}
