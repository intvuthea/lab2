<?php  
	echo "<b style='color:red;font-size:20px;'>We have array 𝐵 = [4, 12, 31, 23, 7, 54, 13, 8,13].Split this array into two array as odd array and even array.</b>"."<br>";
	$arrB = array(4,12,31,23,7,54,13,8);
	//Empty array of Odd and Even
	$oddArr = []; //or $oddArr = array(); or $oddArr = (array) null;
	$countOdd = 0;
	$evenArr = (array) null;
	$countEven = 0;

	for ($i = 0 ; $i < sizeof($arrB) ; $i++){
		if ($arrB[$i] % 2 == 0){
			$evenArr[$countEven] = $arrB[$i];
			$countEven++;
		}else{
			$oddArr[$countOdd] = $arrB[$i];
			$countOdd++;
		}
	}

	echo "Odd number = ";
	foreach ($evenArr as $value) {
		echo $value." ";
	}

	echo "<br>Even number = ";
	foreach ($oddArr as $value) {
		echo $value." ";
	}

	//Or 
	/* 
	echo "Odd number = ";
	print_r($oddArr);
	echo "<br>Even number = ";
	print_r($evenArr);
	*/
?>