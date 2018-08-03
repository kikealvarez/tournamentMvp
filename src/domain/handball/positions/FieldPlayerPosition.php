<?php

declare(strict_types = 1);

namespace Tournament\Handball\Positions;

class FieldPlayerPosition implements IHandballPosition
{
    const INITIAL_RATE = 20;

    const GOAL_MADE_RATE = 1;

    const GOAL_RECEIVED_RATE = -1;
}
