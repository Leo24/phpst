<?php

class Array_Sum{

	/**
	 * @var array the array to get sum
	 */
	public $array;

	public function __construct($array){
		if(is_array($array)){
			$this->$array = $array;
		}
	}

	/**
	 * Gets array sum using build-in function and foreach
	 */
	public function get_array_sum(){
		$array_sum_w1 = array_sum ($this->array);

		$array_sum_w2 = 0;
		foreach ($this->array as $key => $value) {
			$array_sum_w2 += $value;
		}

			echo "\nGetting array sum: \n
				Array Sum way 1: $array_sum_w1 \n
				Array Sum way 2: $array_sum_w2 \n";
	}
}

$array = [1,2,3,4,15,6,7,8,9,10];
$Array_Sum_Instance = new Array_Sum($array);
$Array_Sum_Instance->get_array_sum();
