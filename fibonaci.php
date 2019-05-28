<!DOCTYPE html>
<html>
<head>
	<title>fibonaci</title>
	<style type="text/css">
		form , input{
			font-size: 20px;
			margin-top: 5px;
			background-color: red;
			border-radius: 4px;
			border: 2px solid #3c08d6;
			font-weight: bold;
			color: white;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<form method="post">
		Input your number: <input type="number" placeholder="number" name="num" value="<?php echo $_POST['num']; ?>" onfocus="this.value=''">
		<input type="submit" name="submit" value="SUBMIT">
	</form>

	<?php
		//Using recusion
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

		//The overview of using Recursion
		echo "<br><b>The overview of using Recursion</b><br>";
		$timeBeforeRecusive=microtime()*1000;
		echo "time before run :".$timeBeforeRecusive."<br>";
		echo "Result :".fibonaci($_POST['num'])."<br>";
		$timeAfterRecusive=microtime()*1000;
		echo "time after run :".$timeAfterRecusive."<br>";
		$delayOfRecusive = $timeAfterRecusive-$timeBeforeRecusive;
		echo "delay :".($delayOfRecusive)."<br>";

		//Using loop
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

		//The overview of using Loop
		echo "<br><b>The overview of using Loop</b><br>";
		$timeBeforeLoop=microtime()*1000;
		echo "time before run :".$timeBeforeLoop."<br>";
		echo "Result :".fibo($_POST['num'])."<br>";
		$timeAfterLoop=microtime()*1000;
		echo "time after run :".$timeAfterLoop."<br>";
		$delayOfLoop = $timeAfterLoop-$timeBeforeLoop;
		echo "delay :".($delayOfLoop)."<br>";

		//Compare which one is better 
		if ($delayOfRecusive > $delayOfLoop){
			echo "<br><b>Loop is faster than Recursion</b>";
		}else if($delayOfRecusive < $delayOfLoop){
			echo "<br><b>Recursion is faster than Loop</b>";
		}else{
			echo "<br><b>Loop and Recursion are the same!!!</b>";
		}
		
	?>
</body>
</html>