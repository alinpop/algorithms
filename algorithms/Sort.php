<?php

abstract class Sort
{
    protected $array = [];

    abstract public function run();

    public function __construct(array $array)
    {
        $this->array = array_values($array);
    }

    public function getArray()
    {
        return $this->array;
    }

    public function setArray(array $array)
    {
        $this->array = $array;
    }

    public function isSorted()
    {
        $nativeSort = $this->array;
        sort($nativeSort);

        return $this->array === $nativeSort;
    }

    protected function exchangeValues($firstIndex, $secondIndex)
    {
        $firstValue = $this->array[$firstIndex];
        $this->array[$firstIndex] = $this->array[$secondIndex];
        $this->array[$secondIndex] = $firstValue;
    }
}
