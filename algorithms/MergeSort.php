<?php

class MergeSort
{
    private $array = [];

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function getArray()
    {
        return $this->array;
    }

    private function merge($startIndex, $middleIndex, $endIndex)
    {
        $leftStack = array_slice($this->array, $startIndex, ($middleIndex + 1) - $startIndex);
        $leftStack[] = INF;
        $rightStack = array_slice($this->array, $middleIndex + 1, $endIndex - $middleIndex);
        $rightStack[] = INF;

        $leftStackIndex = 0;
        $rightStackIndex = 0;

        for ($currentIndex = $startIndex; $currentIndex <= $endIndex; $currentIndex++) {
            if ($leftStack[$leftStackIndex] <= $rightStack[$rightStackIndex]) {
                $this->array[$currentIndex] = $leftStack[$leftStackIndex];
                $leftStackIndex++;
            } else {
                $this->array[$currentIndex] = $rightStack[$rightStackIndex];
                $rightStackIndex++;
            }
        }
    }

    public function run($startIndex = null, $endIndex = null)
    {
        $startIndex = $startIndex ?? 0;
        $endIndex = $endIndex ?? count($this->array) - 1;

        if ($startIndex < $endIndex) {
            $middleIndex = (int) (($startIndex + $endIndex) / 2);
            $this->run($startIndex, $middleIndex);
            $this->run($middleIndex + 1, $endIndex);
            $this->merge($startIndex, $middleIndex, $endIndex);
        }

    }
}

