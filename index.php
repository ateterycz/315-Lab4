<?php
	
?>

<html>
	<head>
		<title>PHP Form</title>
	</head>
	<body>
		<form action="includes/select.inc.php" method="get">
			<div> food: <input type="text" name="foods" value="" /></div>
			<div> <input type="submit" name="select_submit" value="Select" /></div>
		</form>
		<br>
		<br>
		<form action="includes/insert.inc.php" method="post">
			<div> food: <input type="text" name="foodi" value="" /></div>
			<div> cals: <input type="text" name="calsi" value="" /></div>
			<div> <input type="submit" name="insert_submit" value="Insert" /></div>
		</form>
	</body>
</html>