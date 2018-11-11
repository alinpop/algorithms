<?php

class InsertionSort
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

    public function run()
    {
        for ($currentIndex = 1; $currentIndex < count($this->array); $currentIndex++) {
            $valueToOrder = $this->array[$currentIndex];
            $previousIndex = $currentIndex - 1;
            while ($previousIndex >= 0 && $this->array[$previousIndex] > $valueToOrder) {
                $this->array[$previousIndex + 1] = $this->array[$previousIndex];
                --$previousIndex;
            }
            $this->array[++$previousIndex] = $valueToOrder;
        }
    }
}
