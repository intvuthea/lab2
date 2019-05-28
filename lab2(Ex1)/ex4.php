<?php  
	echo "<b style='color:red;font-size:20px;'>Write a PHP code to transpose the matrix A</b>"."<br>";
	$arrA = array(array('a','b','c'), array('d','e','f'), array('g','h','i'), array('j','k','l'));
	$arrTranspose = array();
	//sizeof($arrA) : length of row
	//sizeof($arrA[0]) : length of column , $arrA[0]:put as default
	if (sizeof($arrA) < sizeof($arrA[0])){
		$rc = sizeof($arrA[0]) - sizeof($arrA); 
		//length of column - length of row
		for ($r = 0 ; $r < sizeof($arrA)+$rc ; $r++){
			for ($c = 0 ; $c < sizeof($arrA[0])-$rc ; $c++){
				$arrTranspose[$r][$c] = $arrA[$c][$r];
			}
		}
	}else if (sizeof($arrA) == sizeof($arrA[0])){
		//length of row = length of column
		for ($r = 0 ; $r < sizeof($arrA) ; $r++){
			for ($c = 0 ; $c < sizeof($arrA[0]) ; $c++){
				$arrTranspose[$r][$c] = $arrA[$c][$r];
			}
		}
	}else{
		$rc = sizeof($arrA) - sizeof($arrA[0]); 
		//length of row - length of column
		for ($r = 0 ; $r < sizeof($arrA)-$rc ; $r++){
			for ($c = 0 ; $c < sizeof($arrA[0])+$rc ; $c++){
				$arrTranspose[$r][$c] = $arrA[$c][$r];
			}
		}
	}

	echo "Result after do the transpose of a matrix: <br>";
	print_r($arrTranspose);
?>