<?php

declare(strict_types = 1);

namespace Tournament;

use Tournament\Exceptions\InvalidScoreException;

class Score
{
    /** @var int */
    private $team1Score;

    /** @var int */
    private $team2Score;

    /**
     * @throws InvalidScoreException
     */
    public function __construct(int $team1Score, int $team2Score)
    {
        $this->validate($team1Score, $team2Score);

        $this->team1Score = $team1Score;
        $this->team2Score = $team2Score;
    }

    private function validate(int $team1Score, int $team2Score): bool
    {
        if ($team1Score < 0 || $team2Score < 0) {
            throw new InvalidScoreException('A team score cannot be less than zero');
        }

        if ($team1Score == $team2Score) {
            throw new InvalidScoreException('There must be a winner in every match');
        }
    }

}
