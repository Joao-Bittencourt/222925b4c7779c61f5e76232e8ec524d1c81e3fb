<?php

namespace joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Blocks;

use joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Elements;
use joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Common\Block;

final class BlockEAD extends Block
{
    public $elements = [
        'ead' => ['class' => Elements\EAD::class, 'level' => 0, 'type' => 'single'],
    ];
}
