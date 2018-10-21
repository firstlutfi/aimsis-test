<?php
	function f($arr){
		$i = 0;
		$s = 0;

		while($i < count($arr)){
			$s = $s + $arr[$i];
			$i = $i+1;
		}

		return $s;
	}

	$params = array(5,7,8,3);
	echo "f = " . f($params) . "<br>";
?>