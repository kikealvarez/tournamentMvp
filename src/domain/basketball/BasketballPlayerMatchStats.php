<?php

declare(strict_types = 1);

namespace Tournament\Basketball;

use Tournament\IPlayerMatchStats;

class BasketballPlayerMatchStats implements IPlayerMatchStats
{
    /** @var BasketballPlayer */
    private $player;

    /** @var int */
    private $points;

    /** @var int */
    private $assists;

    /** @var int */
    private $rebounds;

    public function __construct(BasketballPlayer $player, int $points, int $assists, int $rebounds)
    {
        $this->player = $player;
        $this->points = $points;
        $this->assists = $assists;
        $this->rebounds = $rebounds;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function getRebounds(): int
    {
        return $this->rebounds;
    }

    public function getPlayerRating(): int
    {
        return $this->getPointsRating() +
            $this->getAssistsRating() +
            $this->getReboundsRating();

    }

    private function getPointsRating(): int
    {
        return $this->player->getPosition()->getPointsRate() * $this->points;
    }

    private function getAssistsRating(): int
    {
        return $this->player->getPosition()->getAssistsRate() * $this->assists;
    }

    private function getReboundsRating(): int
    {
        return $this->player->getPosition()->getReboundsRate() * $this->rebounds;
    }
}
