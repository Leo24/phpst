<?php

class Array_Min_Max{

	private $array;

	function __construct($array){
		if(is_array($array)){
			$this->$array = $array;
		}
	}

	function get_array_max_value($array){

		$array_max_value_w1 = max($array);

		$processed_array = $array;
		$array_max_value_w2 = $processed_array[0];
		foreach ($processed_array as $key => $value) {
			if($array_max_value_w2 < $value){
				$array_max_value_w2 = $value;
			}
		}

		echo "\nGetting array max value: \n
				Max Value way 1: $array_max_value_w1 \n
				Max Value way 2: $array_max_value_w2 \n";
	}

	function get_array_min_value($array){

		$array_min_value_w1 = min($array);

		$processed_array = $array;
		$array_min_value_w2 = $processed_array[0];
		foreach ($processed_array as $key => $value) {
			if($array_min_value_w2 > $value){
				$array_min_value_w2 = $value;
			}
		}

		echo "\nGetting array min value: \n
					Min Value way 1: $array_min_value_w1 \n
					Min Value way 2: $array_min_value_w2 \n";

	}
}
$array = [-1,1,2,3,4,15,16,7,8,9,10];
$Array_Min_Max_Instance = new Array_Min_Max($array);

$Array_Min_Max_Instance->get_array_max_value($Array_Min_Max_Instance->$array);
$Array_Min_Max_Instance->get_array_min_value($Array_Min_Max_Instance->$array);

