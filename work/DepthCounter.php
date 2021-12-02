<?php

namespace Work;

class DepthCounter
{
    public function countIncreases(array $measurements) {
        $iterator = 0;
        $last = $measurements[0];
        for ($i = 1; $i < count($measurements); $i++) {

            if ($measurements[$i] > $last) {
                $iterator++;
            }

            $last = $measurements[$i];
        }

        return $iterator;
    }

    public function countSlidingIncreases(array $measurements) {
        $iterator = 0;
        $last = $measurements[0] + $measurements[1] + $measurements[2];

        for ($i = 2; $i < count($measurements) - 1; $i++) {
            $currentWindow = $measurements[$i-1] + $measurements[$i] + $measurements[$i+1];

            if ($currentWindow > $last) {
                $iterator++;
            }

            $last = $currentWindow;
        }

        return $iterator;

    }
}