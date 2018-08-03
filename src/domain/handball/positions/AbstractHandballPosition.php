<?php

declare(strict_types = 1);

namespace Tournament\Basketball\Positions;

use Tournament\ISportPosition;

class AbstractHandballPosition implements ISportPosition
{
    public function getInitialRate(): int
    {
        return self::INITIAL_RATE;
    }

    public function getMadeGoalRate(): int
    {
        return self::GOAL_MADE_RATE;
    }

    public function getReceivedGoalRate(): int
    {
        return self::GOAL_RECEIVED_RATE;
    }
}
