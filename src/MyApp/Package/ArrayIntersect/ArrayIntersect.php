<?php

namespace MyApp\Package\ArrayIntersect;

class ArrayIntersect
{

    /**
     * @var array the array_1 to check for intersection
     */
    public $array1 = array();
    /**
     * @var array the array_2 to check for intersection
     */
    public $array2 = array();

    public function __construct($array1, $array2)
    {
        $this->array1 = $array1;
        $this->array2 = $array2;
    }

    /**
     * Checks array_1 and array_2 for intersection using build-in function
     */
    public function intersectWay1()
    {
        $diff = array_intersect($this->array1, $this->array2);
        echo "array intersect way 1: \n";
        foreach ($diff as $k => $v) {
            echo "\"$k\" =>\"$v\"\n";
        }

    }

    /**
     * Checks array_1 and array_2 for intersection using foreach function
     */
    public function intersectWay2()
    {
        $intersection = array();
        foreach ($this->array1 as $key => $value) {
            foreach ($this->array2 as $k => $val) {
                if (strtolower($value) == strtolower($val)) {
                    $intersection[] = $value;
                }
            }
        }
        echo "array intersect way 2: \n";
        foreach ($intersection as $k => $v) {
            echo"\"$k\" =>\"$v\"\n";
        }

    }

}

$arr[1] = "HTML";
$arr[2] = "CSS";
$arr[3] = "PHP";
$arr[4] = "MacOS";

$arr2[1] = "PHP";
$arr2[2] = "MacOS";
$arr2[3] = "PAINT.NET";
$arr2[4] = "DREAMWEAVER";


$intersect = new ArrayIntersect($arr, $arr2);
$intersect_w1 = $intersect->intersectWay1();
$intersect_w2 = $intersect->intersectWay2();
