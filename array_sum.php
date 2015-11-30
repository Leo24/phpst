<?php

class Array_Sum{

	public $array;

	function __construct($array){
		if(is_array($array)){
			$this->$array = $array;
		}
	}

	function get_array_sum($array){
		$array_sum_w1 = array_sum ($array);

		$array_sum_w2 = 0;
		foreach ($array as $key => $value) {
			$array_sum_w2 += $value;
		}

			echo "\nGetting array sum: \n
				Array Sum way 1: $array_sum_w1 \n
				Array Sum way 2: $array_sum_w2 \n";
	}
}

$array = [1,2,3,4,15,6,7,8,9,10];
$Array_Sum_Instance = new Array_Sum($array);
$Array_Sum_Instance->get_array_sum($Array_Sum_Instance->$array);
