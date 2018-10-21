<?php
	$currency = 450; // 4.5G  = 450s
	$solution = 0;

	for ($a = $currency; $a >= 0; $a -= 200) {
		for ( $b = $a; $b >= 0; $b -= 100) {
			for ( $c = $b; $c >= 0; $c -= 50) {
            	for ( $d = $c; $d >= 0; $d -= 25) {
                	for ( $e = $d; $e >= 0; $e -= 10) {
                    	for ( $f = $e; $f >= 0; $f -= 5) {
                            $solution++;
                    	}
                	}
            	}
        	}
    	}
	}

	echo "There are {$solution} ways to make 4.5G or 450s";	
?>