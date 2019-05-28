<?php  
	echo "<b style='color:red;font-size:20px;'>We have array 𝐵 = [4, 12, 31, 23, 7, 54, 13, 8,13].Split this array into two array as odd array and even array.</b>"."<br>";
	$arrB = array(4,12,31,23,7,54,13,8);
	//Empty array of Odd and Even
	$oddArr = []; //or $oddArr = array(); or $oddArr = (array) null;
	$countOdd = 0;
	$evenArrr = (array) null;
	$countEven = 0;

	for ($i = 0 ; $i < sizeof($arrB) ; $i++){
		if ($arrB[$i] % 2 == 0){
			$evenArrr[$countEven] = $arrB[$i];
			$countEven++;
		}else{
			$oddArr[$countOdd] = $arrB[$i];
			$countOdd++;
		}
	}

	echo "Odd number = ";
	print_r($oddArr);
	echo "<br>Even number = ";
	print_r($evenArrr);
?>