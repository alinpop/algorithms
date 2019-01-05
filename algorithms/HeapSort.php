<?php

class HeapSort extends Sort
{
    private $heapSize;

    public function run()
    {
        $this->buildMaxHeap();

        for ($i = count($this->array) - 1; $i > 0; $i--) {
            $this->exchangeValues(0, $i);
            $this->heapSize = $this->heapSize - 1;
            $this->maxHeapify(0);
        }
    }

    private function buildMaxHeap()
    {
        $arraySize = count($this->array) -1 ;

        $this->heapSize = $arraySize;

        for ($i = floor($arraySize / 2); $i >= 0; $i--) {
            $this->maxHeapify($i);
        }
    }

    private function maxHeapify($i)
    {
        $leftIndex = $this->leftIndex($i);
        $rightIndex = $this->rightIndex($i);

        if (!isset($this->array[$leftIndex])) {
            return;
        }

        $largestIndex = $i;

        if ($leftIndex <= $this->heapSize && $this->array[$leftIndex] > $this->array[$i]) {
            $largestIndex = $leftIndex;
        }

        if (isset($this->array[$rightIndex]) && $rightIndex <= $this->heapSize && $this->array[$rightIndex] > $this->array[$largestIndex]) {
            $largestIndex = $rightIndex;
        }

        if ($largestIndex !== $i) {
            $this->exchangeValues($i, $largestIndex);
            $this->maxHeapify($largestIndex);
        }
    }

    private function leftIndex($parentIndex)
    {
        return $parentIndex * 2 + 1;
    }

    private function rightIndex($parentIndex)
    {
        return $parentIndex * 2 + 2;
    }
}

