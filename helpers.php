<?php

function getRunningTime($algorithm)
{
    $startTime = time();

    echo "\n" . get_class($algorithm);

    $algorithm->run();

    $endTime = time();

    $totalTimeInSeconds = $endTime - $startTime;

    echo "\n{$totalTimeInSeconds} seconds\n";

    print_r(array_slice($algorithm->getArray(), 0, 3));
    print_r(array_slice($algorithm->getArray(), count($algorithm->getArray()) - 3, 3));
}
