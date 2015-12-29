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
        $arrayMaxValueW1 = max($this->array);
        $processedArray = $this->array;
        $arrayMaxValueW2 = $processedArray[0];
        foreach ($processedArray as $key => $value) {
            if ($arrayMaxValueW2 < $value) {
                $arrayMaxValueW2 = $value;
            }
        }

        echo "\nGetting array max value: \n
        Max Value way 1: $arrayMaxValueW1 \n
        Max Value way 2: $arrayMaxValueW2 \n";
    }

    /**
     * Gets array max value using build-in function min and foreach
     */
    public function getArrayMinValue()
    {
        $arrayMaxValueW1 = min($this->array);
        $processedArray = $this->array;
        $arrayMaxValueW2 = $processedArray[0];
        foreach ($processedArray as $key => $value) {
            if ($arrayMaxValueW2 > $value) {
                $arrayMaxValueW2 = $value;
            }
        }

        echo "\nGetting array min value: \n
        Min Value way 1: $arrayMaxValueW1 \n
        Min Value way 2: $arrayMaxValueW2 \n";

    }
}
$array = [-1,1,2,3,4,15,16,7,8,9,10];
$Array_Min_Max_Instance = new ArrayMinMax($array);

$Array_Min_Max_Instance->getArrayMaxValue();
$Array_Min_Max_Instance->getArrayMinValue();
