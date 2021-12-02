<?php

require 'vendor/autoload.php';
use Work\DepthCounter;


$measurements = file('inputs/day1-0.txt', FILE_IGNORE_NEW_LINES);

echo (new DepthCounter())->countIncreases($measurements);

echo (new DepthCounter())->countSlidingIncreases($measurements);
