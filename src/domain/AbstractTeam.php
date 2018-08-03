<?php

declare(strict_types = 1);

namespace Tournament;

use Tournament\Basketball\AbstractPlayer;

abstract class AbstractTeam
{
    /** @var array */
    private $players = [];

    public function addPlayer(AbstractPlayer $player): void
    {
        $this->players[] = $player;
    }
}
