<?php

function evaluateAlgorithm(Sort $algorithm)
{
    echo "\n" . get_class($algorithm);

    echo "\n - Sort reversed array: " . getRunningTime($algorithm);
    echo $algorithm->isSorted() ? " - Is sorted." : " - Not sorted.";

    $newArray = $algorithm->getArray();
    shuffle($newArray);
    $algorithm->setArray($newArray);
    echo "\n - Sort shuffled array: " . getRunningTime($algorithm);
    echo $algorithm->isSorted() ? " - Is sorted." : " - Not sorted.";

    echo "\n - Sort already sorted: " . getRunningTime($algorithm);
    echo $algorithm->isSorted() ? " - Is sorted." : " - Not sorted.";
}

function getRunningTime($algorithm)
{
    $startTime = time();

    $algorithm->run();

    $endTime = time();

    $totalTimeInSeconds = $endTime - $startTime;

    return "{$totalTimeInSeconds} seconds";
}
