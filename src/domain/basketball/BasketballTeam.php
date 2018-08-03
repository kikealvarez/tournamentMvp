<?php

declare(strict_types = 1);

namespace Tournament\Basketball;

use Tournament\AbstractTeam;
use Tournament\Exceptions\InvalidTeamException;

class BasketballTeam extends AbstractTeam
{
    const MIN_PLAYERS_NUMBER = 5;

    /**
     * @throws InvalidTeamException
     */
    public function validateTeam(AbstractTeam $team): void
    {
        if (count($team->getPlayers()) < self::MIN_PLAYERS_NUMBER) {
            throw new InvalidTeamException('A basketball team must have at least 5 players');
        }

        /** @todo */
        //validate the team has at least 1 guard, 2 forwards and 2 centers
    }
}
