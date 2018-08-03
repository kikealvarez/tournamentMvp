<?php

declare(strict_types = 1);

namespace Tournament\Basketball;

use Tournament\AbstractTeam;

class HandballTeam extends AbstractTeam
{
    const MIN_PLAYERS_NUMBER = 7;

    /**
     * @throws InvalidTeamException
     */
    public function validateTeam(AbstractTeam $team): void
    {
        if (count($team->getPlayers()) < self::MIN_PLAYERS_NUMBER) {
            throw new InvalidTeamException('A handball team must have at least 7 players');
        }

        /** @todo */
        //validate the team has at least 1 goalkeeper and 6 field players
    }
}
