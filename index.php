<?php

include 'helpers.php';
include 'autoload.php';

$array = [];
for ($i = 30000; $i >=0; $i--) {
    $array[] = $i;
}


echo getRunningTime(new InsertionSort($array));
echo getRunningTime(new MergeSort($array));
