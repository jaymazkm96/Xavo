<?php
echo "Hello world2!<br>";
include("connect.php");
include("functions.php");
$data    = $_POST["result"];
$data    = json_decode("$data", true);
$_SESSION['q1']=$data["question1"];
$_SESSION['q2']=$data["question2"];
$_SESSION['q3']=$data["question3"];
$_SESSION['q4']=$data["question4"];
$_SESSION['q5']=$data["question5"];
	
//$insertQuery = "INSERT INTO users(q1, q2, q3, q4, q5) VALUES ('$q1','$q2','$q3','$q4','$q5')";
//mysqli_query($con, $insertQuery);
?>