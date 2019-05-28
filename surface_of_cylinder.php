<!DOCTYPE html>
<html>
<head>
	<title>Surface of cylinder</title>
	<style type="text/css">
		p{
			color: blue;
			font-size: 20px;
			font-weight: bold;
		}
		form , input , button{
			font-size: 20px;
			margin-top: 5px;
		}
		button{
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
	<?php
	function surface($r,$h){
		$a=(2*pi()*$r*$h)+(2*pi()*$r*$r);
		return $a;
	}
	?>

	<form method="post">
		<b>Please input </b><br> 
		Radius = <input type="number" placeholder="radius" name="radius" value="<?php echo $_POST['radius']; ?>" onfocus="this.value=''">
		<br>
		Height = <input type="number" placeholder="height" name="height" value="<?php echo $_POST['height']; ?>" onfocus="this.value=''">
		<!-- NOTE -->
		<!-- 
		use value="<?php //echo $_POST['radius']; ?>" : to let the value input stable in the box -->
		<!-- 
			use onfocus="this.value=''" : to clear the value when the user input the new value
		-->
		<br>
		<button>submit</button>
	</form>
	<p>Surface of cylinder = <?php echo surface($_POST['radius'],$_POST['height']); ?></p>

</body>
</html>

