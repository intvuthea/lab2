<?php  
	echo "<b style='color:red;font-size:20px;'>We have 2 matrices in size of 3x3 as bellows. By using multi-dimensional array display the result of matrix A+B.</b>"."<br>";
	$arrA = array(array('a','b','c'), array('d','e','f'), array('g','h','i'));
	$arrB = array(array('j','k','l'), array('m','n','p'), array('x','y','z'));
	$arrSum = []; //empty array
	for ($r = 0 ; $r < sizeof($arrA) ; $r++){
		for ($c = 0 ; $c < sizeof($arrA[$r]) ; $c++){
			$arrSum[$r][$c] = $arrA[$r][$c] ."+". $arrB[$r][$c];
		}
	}

	echo "A + B =";
	print_r($arrSum);
?>