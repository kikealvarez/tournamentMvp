<?php

declare(strict_types = 1);

namespace Tournament\Basketball\Positions;

use Tournament\ISportPosition;

class AbstractBasketballPosition implements ISportPosition
{
    public function getPointsRate(): int
    {
        return self::POINT_RATE;
    }

    public function getAssistsRate(): int
    {
        return self::ASSIST_RATE;
    }

    public function getReboundsRate(): int
    {
        return self::REBOUND_RATE;
    }
}
