<?php

namespace MyApp\Package\ArrayMinMax;

class ArrayMinMax
{

    /**
     * @var array the array to get min, max values
     */
    public $array;

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->array = $array;
        }
    }

    /**
     * Gets array max value using build-in function max and foreach
     */
    public function getArrayMaxValue()
    {
        $array_max_value_w1 = max($this->array);
        $processed_array = $this->array;
        $array_max_value_w2 = $processed_array[0];
        foreach ($processed_array as $key => $value) {
            if ($array_max_value_w2 < $value) {
                $array_max_value_w2 = $value;
            }
        }

        echo "\nGetting array max value: \n
        Max Value way 1: $array_max_value_w1 \n
        Max Value way 2: $array_max_value_w2 \n";
    }

    /**
     * Gets array max value using build-in function min and foreach
     */
    public function getArrayMinValue()
    {
        $array_min_value_w1 = min($this->array);
        $processed_array = $this->array;
        $array_min_value_w2 = $processed_array[0];
        foreach ($processed_array as $key => $value) {
            if ($array_min_value_w2 > $value) {
                $array_min_value_w2 = $value;
            }
        }

        echo "\nGetting array min value: \n
        Min Value way 1: $array_min_value_w1 \n
        Min Value way 2: $array_min_value_w2 \n";

    }
}
$array = [-1,1,2,3,4,15,16,7,8,9,10];
$Array_Min_Max_Instance = new ArrayMinMax($array);

$Array_Min_Max_Instance->getArrayMaxValue();
$Array_Min_Max_Instance->getArrayMinValue();
