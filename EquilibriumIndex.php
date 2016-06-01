<?php

/**
 * Get the keys of the provided array where the sum of left side elements matches the right side
 * 
 * This solution was heavily inspired by http://www.geeksforgeeks.org/equilibrium-index-of-an-array/
 * 
 * @param array $arr The list of numbers that will be searched for equilibrium indices
 * @return array A list of equilibrium indices
 * @author Spencer Williams <spencer@aninternetpresence.net>
 */
function getEquilibriums($arr) {
	$output = array();
	
	// Find the sum of the whole array
	$sum = array_sum($arr);
	$leftsum = 0; // Sum of left side of array
	
	foreach($arr as $index => $value){
	    $sum -= $value; // Get the right side sum at $index
	    
	    // The right and left side sums match, so store the equilibrium index
	    if($leftsum === $sum){
	        $output[] = $index;
	    }
	    
	    // The current value is added to the left sum before checking the next item
	    $leftsum += $value;
	}
	
	return $output;
}
