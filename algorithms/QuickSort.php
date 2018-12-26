<?php

class QuickSort extends Sort
{
    public function run($startIndex = null, $endIndex = null)
    {
        $startIndex = $startIndex ?? 0;
        $endIndex = $endIndex ?? count($this->array) - 1;

        if ($startIndex >= $endIndex) {
            return;
        }

        $partitionedIndex = $this->partition($startIndex, $endIndex);
        $this->run($startIndex, $partitionedIndex - 1);
        $this->run($partitionedIndex + 1, $endIndex);
    }

    private function partition($startIndex, $endIndex)
    {
        $pivotElement = $this->array[$endIndex];
        $exchangeValuesIndex = $startIndex - 1;
        for ($currentIndex = $startIndex; $currentIndex < $endIndex; $currentIndex++) {
            if ($this->array[$currentIndex] <= $pivotElement) {
                $exchangeValuesIndex++;
                $this->exchangeValues($currentIndex, $exchangeValuesIndex);
            }
        }
        $exchangeValuesIndex++;
        $this->exchangeValues($endIndex, $exchangeValuesIndex);

        return $exchangeValuesIndex;
    }

    private function exchangeValues($firstIndex, $secondIndex)
    {
        $firstValue = $this->array[$firstIndex];
        $this->array[$firstIndex] = $this->array[$secondIndex];
        $this->array[$secondIndex] = $firstValue;
    }
}
