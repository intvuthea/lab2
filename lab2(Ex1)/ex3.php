<?php  
	echo "<b style='color:red;font-size:20px;'>Reverse this array 𝐶 = [𝑝𝑎𝑠𝑠𝑒𝑟𝑖𝑛𝑒, h𝑢𝑚𝑚𝑖𝑛𝑔𝑏𝑖𝑟𝑑, 𝑐𝑜𝑟𝑚𝑜𝑟𝑎𝑛𝑡, 𝑒𝑎𝑔𝑙𝑒,  𝑛𝑖𝑔h𝑡𝑖𝑛𝑔𝑎𝑙𝑒]</b>"."<br>";
	$arrC = array("passerine", "hummingbird", "cormorant", "eagle", "nightingale");
	$reverse = array();
	$count = 0;

	for ($i = sizeof($arrC) - 1 ; $i >= 0 ; $i--){
		$reverse[$count] = $arrC[$i];
		$count++;
	}

	echo "After reverse (Without using array_reverse(array)) = ";
	print_r($reverse);

	echo "<br><br>After reverse (using array_reverse(array))";
	print_r(array_reverse($arrC));
		
?>