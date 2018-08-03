<?php

declare(strict_types = 1);

namespace Tournament\Basketball;

use Tournament\Basketball\Positions\ISportPosition;

abstract class AbstractPlayer
{
    /** @var string */
    private $name;

    /** @var string */
    private $uniqueName;

    /** @var ISportPosition */
    private $position;

    public function __construct(string $name, string $uniqueName, ISportPosition $position)
    {
        $this->name = $name;
        $this->uniqueName = $uniqueName;
        $this->position = $position;
    }

    public function getPosition(): ISportPosition
    {
        return $this->position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUniqueName(): string
    {
        return $this->uniqueName;
    }
}
