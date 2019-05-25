<?php
	//AX^2 +BX +c=0
	$A=2;
	$B=4;
	$C=5;
	$deta=($B*$B)-(4*$A*$C);
	if($deta>0){
		$X1=(-$B+pow($deta,0.5)) /(2*$A);
		$X2=(-$B-pow($deta,0.5)) /(2*$A);
	}
	elseif ($deta<0) {
		$deta=-1*$deta;
		$deta=pow($deta,0.5);
		$X1="(".-1*$B."+".$deta."j)/".+(2*$A);
		$X2="(".-1*$B."-".$deta."j)/".+(2*$A);
	}
	elseif($deta == 0){
		$X1=-$B /(2*$A);
		$X2=$X1;
	}
	echo "X1  ".$X1."<br>";
	echo "X2  ".$X2;
?>