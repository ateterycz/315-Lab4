<?php
	$dbserver = "localhost";
	$dbuser = "lab4user315";
	$dbpass = "password315";
	$dbname = "diet";

	$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
	
	$food = $_GET['foods'];

	$q = "SELECT food, cals FROM diet WHERE food = ?";

	$stmt = $conn->prepare($q);
	$stmt->bind_param("s", $food);
	$stmt->execute();
	$result = $stmt->get_result();
	while($row = $result->fetch_assoc()){
		echo $row['food'];
		echo " | ";
		echo $row['cals'];
		echo "<br>";
	}
	echo '<p><a class="btn" href="../index.php">Back</a></p>';
?>

