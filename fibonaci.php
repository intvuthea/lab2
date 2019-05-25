<?php
	echo date("h-m-s")."<br>";
	function fibonaci($n){
		if($n>2){
			return fibonaci($n-2)+fibonaci($n-1);
		}
		elseif ($n<=2){
			return 1;
		}
	}
	echo fibonaci(6)."<br>";
	echo date("h-m-s")."<br>";
	function fibo($n){
		
	}
?>