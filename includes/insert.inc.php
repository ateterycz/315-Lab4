<?php


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "lab4user315", "password315", "diet"); 

$food = $_POST['foodi'];
$cals = $_POST['calsi'];

$insertQ = "INSERT INTO diet (food, cals) ";
$insertQ .= "VALUES (?, ?)";

$stmt = $mysqli->prepare($insertQ);
$stmt->bind_param("ss", $food, $cals);

$stmt->execute();
echo "Successfully inserted.";
echo '<p><a class="btn" href="../index.php">Back</a></p>';

?>