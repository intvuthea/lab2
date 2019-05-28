<?php
	//AX^2 +BX +c=0
	$A=2;
	$B=1;
	$C=2;
	$deta=($B*$B)-(4*$A*$C);
	if($deta>0){
		$X1=(-$B+sqrt($deta)) /(2*$A);
		$X2=(-$B-sqrt($deta)) /(2*$A);
	}
	elseif ($deta<0) {
		$deta = -1 * $deta;
		$X1=(-$B+sqrt($deta))/2*$A."i";
		$X2=(-$B-sqrt($deta))/2*$A."i";
	}
	elseif($deta == 0){
		$X1=-$B /(2*$A);
		$X2=$X1;
	}
	echo "Result : <br>";
	echo "X1 = ".$X1."<br>";
	echo "X2 = ".$X2;
?>