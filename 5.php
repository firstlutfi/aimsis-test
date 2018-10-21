<?php
	$input = file('input2.in');

	$a = array();
	$b = array();
	$k = array();
	

	for ($i=1; $i <= count($input)-1 ; $i++) { 
		if ($i % 3 == 1) {
			array_push($a, $input[$i]);
		}elseif ($i % 3 == 2) {
			array_push($b, $input[$i]);
		}else{
			array_push($k, $input[$i]);
		}
	}

	for ($i=1; $i <= count($a); $i++) {
		$counter = 0;
		for ($j=intval($a[$i-1]); $j<=intval($b[$i-1]); $j++) { 
			if (intval($j) % intval($k[$i-1]) == 0) {
				$counter++;
			}
		}
		echo "Case {$i}: {$counter}<br>";
	}
		
	
?>