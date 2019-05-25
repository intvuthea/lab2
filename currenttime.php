
<?php
$t=date("h");
if($t>0 & $t<11){
	echo "Good morning";
}
else if($t>=11 & $t<17){
	echo "Good Afternoon";
}
if($t>=17){
	echo "Good Everning";
}
?>

