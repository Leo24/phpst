<?php

namespace MyApp\Package\ArraySum;

class ArraySum
{

    /**
     * @var array the array to get sum
     */
    public $array;

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->array = $array;
        }
    }

    /**
     * Gets array sum using build-in function and foreach
     */
    public function getArraySum()
    {
        $arraySumW1 = array_sum($this->array);

        $arraySumW2 = 0;
        foreach ($this->array as $key => $value) {
            $arraySumW2 += $value;
        }

        echo "\nGetting array sum: \n
                Array Sum way 1: $arraySumW1 \n
                Array Sum way 2: $arraySumW2 \n";
    }
}

$array = [1,2,3,4,15,6,7,8,9,10];
$Array_Sum_Instance = new ArraySum($array);
$Array_Sum_Instance->getArraySum();
