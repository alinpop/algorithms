<?php

include 'helpers.php';
include 'autoload.php';

$arraySize = 10000;

$array = [];
for ($i = $arraySize; $i >=0; $i--) {
    $array[] = $i;
}

echo 'ARRAY SIZE: ' . number_format($arraySize) . "\n";

evaluateAlgorithm(new InsertionSort($array));
evaluateAlgorithm(new MergeSort($array));
evaluateAlgorithm(new BubbleSort($array));
evaluateAlgorithm(new QuickSort($array));
evaluateAlgorithm(new HeapSort($array));
