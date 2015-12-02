<?php
class Array_Intersect
{

    /**
     * @var array the array_1 to check for intersection
     */
    public $array_1 = array();
    /**
     * @var array the array_2 to check for intersection
     */
    public $array_2 = array();

    public function __construct($array_1, $array_2)
    {
        $this->array_1 = $array_1;
        $this->array_2 = $array_2;
    }

    /**
     * Checks array_1 and array_2 for intersection using build-in function
     */
    public function intersect_way1()
    {
        $diff = array_intersect($this->array_1, $this->array_2);
        echo "array intersect way 1: \n";
        foreach($diff as $k => $v){
            echo "\"$k\" =>\"$v\"\n";
        }

    }

    /**
     * Checks array_1 and array_2 for intersection using foreach function
     */
    public function intersect_way2()
    {
        $intersection = array();
        foreach($this->array_1 as $key =>$value){
            foreach($this->array_2 as $k =>$val){
                if(strtolower($value) == strtolower($val)){
                    $intersection[] = $value;
                }
            }
        }
        echo "array intersect way 2: \n";
        foreach($intersection as $k => $v){
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


$intersect = new Array_Intersect($arr, $arr2);
$intersect_w1 = $intersect->intersect_way1();
$intersect_w2 = $intersect->intersect_way2();
