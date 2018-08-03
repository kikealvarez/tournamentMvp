<?php

declare(strict_types = 1);

namespace Tournament\Handball\Positions;

class GoalkeeperPosition extends AbstractHandballPosition
{
    const INITIAL_RATE = 50;

    const GOAL_MADE_RATE = 5;

    const GOAL_RECEIVED_RATE = -2;
}
