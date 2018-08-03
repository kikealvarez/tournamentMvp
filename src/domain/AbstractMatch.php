<?php

declare(strict_types = 1);

namespace Tournament;

use Tournament\AbstractTeam;
use Tournament\Score;

abstract class AbstractMatch
{
    /** @var AbstractTeam */
    private $team1;

    /** @var AbstractTeam */
    private $team2;

    /** @var Score */
    private $score;

    public function __construct(AbstractTeam $team1, AbstractTeam $team2, Score $score)
    {
        $this->validateTeam();

        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->score = $score;
    }

    /**
     * @throws InvalidTeamException
     */
    public abstract function validateTeam(AbstractTeam $team): void
}
