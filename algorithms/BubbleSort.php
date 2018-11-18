<?php

class BubbleSort extends Sort
{
    public function run()
    {
        for ($i = 0; $i < count($this->array) - 1; $i++) {
            for ($j = count($this->array) - 1; $j > $i; $j--) {
                if ($this->array[$j - 1] > $this->array[$j]) {
                    $greaterValue = $this->array[$j - 1];
                    $this->array[$j - 1] = $this->array[$j];
                    $this->array[$j] = $greaterValue;
                }
            }
        }
    }
}
