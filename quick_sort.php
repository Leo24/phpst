<?php

class Array_Quick_Sort
{

    public function __construct($array)
    {
        $this->qsort($array);
    }

    public function qsort($array) {

        $left = 0;
        $right = count($array) - 1;

        $this->array_sort($array, $left, $right);

    }

    public function array_sort($array, $left, $right) {

//Create copies of income variables
        $l = $left;
        $r = $right;

//Get center of array
        $center = $array[(int)($left + $right) / 2];

//Let's sort the array
        do {

//Get values greater than center
            while ($array[$r] > $center) {
                $r--;
            }

//Get values lower than center
            while ($array[$l] < $center) {
                $l++;
            }

//After iterations check cycle count
            if ($l <= $r) {

//If true, change cells positions
                list($array[$r], $array[$l]) = array($array[$l], $array[$r]);

//Increment counters
                $l++;
                $r--;
            }

//Repeat if true
        } while ($l <= $r);

        if ($r > $left) {
//If true do recursion
//Send to array start value and end value
            $this->array_sort($array, $left, $r);
        }

        if ($l < $right) {
//If true do recursion
//Send to array current start value and current end value
            $this->array_sort($array, $l, $right);
        }


print_r($array);
    }

}

$input_array = [-1, -50, 67, 1,2,3,4,15,16,20,8,9,10];
$array_qsort = new Array_Quick_Sort($input_array);