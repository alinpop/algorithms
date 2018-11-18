<?php

include 'helpers.php';
include 'autoload.php';

$array = [];
for ($i = 30000; $i >=0; $i--) {
    $array[] = $i;
}

evaluateAlgorithm(new InsertionSort($array));
evaluateAlgorithm(new MergeSort($array));
evaluateAlgorithm(new BubbleSort($array));
