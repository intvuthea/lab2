<?php
	
	function fibonaci($n){
		if($n>=2){
			return fibonaci($n-2)+fibonaci($n-1);
		}
		elseif ($n==1){
			return 1;
		}
		elseif ($n==0){
			return 0;
		}
	}
	$time1=microtime()*1000;
	echo "time before run :".$time1."<br>";
	echo "recursion :".fibonaci(20)."<br>";
	$time2=microtime()*1000;
	echo "time after run :".$time2."<br>";
	echo "delay :".($time2-$time1)."<br>";




	function fibo($n){
		$n0=0;
		$n1=1;
		if($n==0){
			return $n0;
		}
		else if($n==1){
			return $n1;
		}
		else if ($n>=2){
			for ($i=1;$i<$n;$i++){
				$n2=$n1+$n0;
				$n1=$n2;
				$n0=$n2-$n0;
			}
			return $n2;
		}	
	}
	echo "<br>";
	echo "<br>";
	$time1=microtime()*1000;
	echo "time before run :".$time1."<br>";
	echo "loop :".fibo(20)."<br>";
	$time2=microtime()*1000;
	echo "time after run :".$time2."<br>";
	echo "delay :".($time2-$time1)."<br>";
	echo "so loop is faster than recursion";
	?>