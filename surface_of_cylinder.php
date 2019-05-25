<?php
	function surface($r,$h){
		$a=(2*pi()*$r*$h)+(2*pi()*$r*$r);
		return $a;
	}

	echo surface(1,2);
?>