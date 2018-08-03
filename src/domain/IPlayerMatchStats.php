<?php

declare(strict_types = 1);

namespace Tournament;

interface IPlayerMatchStats
{
    public function getPlayerRating(): int;
}
