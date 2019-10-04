<?php 

namespace Drupal\mymodule;

class MyClass {
	
	public function drupal7_to_drupal8($string) {
		$str = str_replace('Drupal 7', 'Drupal 8', $string);
		return $str;
	}

	public function my_array_range($shuffle = false) {
		$rand_arr = range(1, 5);

		if($shuffle) {
			shuffle($rand_arr);
		}
		
		return $rand_arr;
	}
	
}
