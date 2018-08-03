<?php

declare(strict_types = 1);

namespace Tournament\app;

use Tournament\AbstractMatch as Match;

class InputParser
{
    /** @var string */
    private $inputDirectory;

    public function __construct(string $directory)
    {
        $this->inputDirectory = $directory;
    }

    public function run(): void
    {
        $dir = opendir($this->inputDirectory);
        while($file = readdir($dir)) {

            /** @var array */
            $contents = file($this->inputDirectory . $file);

            $this->createMatch($contents);

        }
    }

    private function createMatch()
    {
        /** @todo No time to implement this */
        //$match = new Match($team1, $team2, $score);
    }

}