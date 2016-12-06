<?php
$id = 0;
$id = $_GET['pid'];
$uid = $_GET['id'];
$con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM user_tempt WHERE user_id = ".$uid." AND temp_id =".$id;//.strtolower($id);
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
			header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=".ucwords($row['name']).".doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo nl2br("<style 'text-align: center'>Email: ".$row['tempt']."</style> \n");

echo "<br></br>";

			}
	
	}else{
		echo "<b>Error</b>";
	}
echo "</body>";
echo "</html>";
?>