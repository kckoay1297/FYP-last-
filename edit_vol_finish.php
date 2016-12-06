<?php
$con = mysqli_connect("localhost","root","","casebase");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
	$desc = $_POST['desc'];
	$id = $_POST['id'];
	$sql = "UPDATE voculbary SET description = '$desc' WHERE voc_id = ".$id;
	//echo $sql;
	if(mysqli_query($con,$sql)){
		echo "<script>setTimeout(\"location.href = 'http://localhost/edit_vol.php';\",300);</script>";
	}else{
		echo $sql;
		//echo "no working";
		echo "<script>setTimeout(\"location.href = 'http://localhost/edit_vol.php';\",300);</script>";
	}
}
?>