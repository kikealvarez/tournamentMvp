<?php

declare(strict_types = 1);

namespace Tournament\Basketball;

use Tournament\IPlayerMatchStats;

class HandballPlayerMatchStats implements IPlayerMatchStats
{
    /** @var HandballPlayer */
    private $player;

    /** @var  @var int */
    private $madeGoals;

    /** @var  @var int */
    private $receivedGoals;

    public function __construct(HandballPlayer $player, int $madeGoals, int $receivedGoals)
    {
        $this->player = $player;
        $this->madeGoals = $madeGoals;
        $this->receivedGoals = $receivedGoals;
    }

    public function getMadeGoals(): int
    {
        return $this->madeGoals;
    }

    public function getReceivedGoals(): int
    {
        return $this->receivedGoals;
    }

    public function getPlayerRating(): int
    {
        return $this->player->getPosition()->getInitialRate() +
            $this->getMadeGoalsRating() +
            $this->getReceivedGoalsRating();

    }

    private function getMadeGoalsRating(): int
    {
        return $this->player->getPosition()->getMadeGoalRate() * $this->madeGoals;
    }

    private function getReceivedGoalsRating(): int
    {
        return $this->player->getPosition()->getReceivedGoalRate() * $this->receivedGoals;
    }
}
