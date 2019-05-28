<?php  
	echo "<b style='color:red;font-size:20px;'>Find the maximum and minimum number of array</b>"."<br>";
	$arr = array(3,-4,32,-7,10,-23,9);
	print_r($arr);
	echo "<br>";

	echo "Using max and min function:<br>";
	echo "max = ".max($arr)."<br>";
	echo "min = ".min($arr)."<br>";

	echo "Without using max and min function:<br>";

	$max = $arr[0];
	$min = $arr[0];

	for ($i = 1 ; $i < sizeof($arr) ; $i++){
		if ($max < $arr[$i]){
			$max = $arr[$i];
		}
		if ($min > $arr[$i]){
			$min = $arr[$i];
		}
	}

	echo "max = ".$max."<br>";
	echo "min = ".$min."<br>";
?>