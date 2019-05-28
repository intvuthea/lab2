<?php
date_default_timezone_set('Asia/Bangkok');
$h = date("h");
$m = date("i");
$s = date("s");
$format = date("A");

if ($h >= 0 && $h <= 11 && $format == "AM"){ //0 = 24 am = 12 am
	echo "$h:$m:$s $format => "."Good Morning";
}else if ($h >= 12 && ($h <= 17 && $m == 0 && $s == 0) && $format == "PM") {
	echo "$h:$m:$s $format => "."Good Afternoon";
}else{
	echo "$h:$m:$s $format => "."Good Everning";
}

?>