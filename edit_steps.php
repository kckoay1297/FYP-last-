<!DOCTYPE html>
<html>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
body {
    background: #000428; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #000428 , #004e92); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #000428 , #004e92); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */overflow = auto;
	width=100%;
	margin: 0 auto;
}

#wrapper {
	overflow: hidden;
	background: #FFFFFF;
	
box-shadow: 
        inset 0px 11px 8px -20px #CCC,
        inset 0px -11px 8px -10px #CCC;
}

.container {
	width: 1200px;
	margin: 0px auto;
}
.clearfix {
	clear: both;
}
#header-wrapper {
	overflow: hidden;
	height: 150px;
	background-color: black;
	//border-left: 60px solid #282828;
}
#header {
	width: 1200px;
	height: 150px;
	margin: 0 auto;
    padding: 1px;
	postion: relative; 
}
#logo {
	float: left;
	width: 507 px;
	height: 50 px;
	//padding: 0px 0px 0px 40px;
}
h1.topspace {
	font-size: 35px; 
	letter-spacing: -1px; 
	color: white; 
	text-transform: uppercase; 
	text-shadow: 1px 1px 0 #000, margin: 10px 0 24px; 
	//text-align: center; 
	line-height: 50px;
	position: relative;
	left:1px;
}

h4.topspace{
	font-size: 25px; 
	letter-spacing: -1px; 
	color: white; 
	text-transform: uppercase; 
	text-shadow: 1px 1px 0 #000, margin: 10px 0 24px; 
	//text-align: center; 
	line-height: 50px;
	position: relative;
	left:1px;
	text-decoration: underline;
}
h2.form{
	padding-left:40px;
}
a{
	color: white;
	text-decoration: none;
}
<--input[type=text], select {
    width: 100%;
    padding: 12px 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-family: Helvetica;
	font-size:120%;
}-->

button.choice {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: Helvetica;
	font-size:120%;
}

button.choice:hover {
    background-color: #45a049;
}

button.choice:active, button.choice:focus {
    background-color: #45a049;
	color: black;
	transform: translateY(4px);
}

input.input{
	padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}

input.final{
	width: 40%;
    background-color: #FF3B3B  ;
    color: white;
    //padding: 12px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: Helvetica;
	font-size:120%;
}
input.final:hover{
	background-color: #FF6F6F  ;
}
input.final:active{
	background-color: #FF6F6F  ;
	color: #DCDCDC;
	transform: translateY(4px);
}

label {
	font-family: Helvetica;
}
textarea {
    width: 70%;
    height: 70%;
    padding: 6px 6px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}
textarea.view{
	width: 70%;
    height: 120px;
    padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #959595;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}
textarea.phone,textarea.ic{
	color:black;
}
a.edit{
	color:blue;
	text-decoration: initial;
}


@media (max-width:767px) {
.logo {
	margin: 15px;
	float: none;
	text-align: center;
}
}
p{
	font-family: Helvetica;
	color: black;
	text-align:center;
	float: clear;
	position: relative;
	top:120px;
	
}
a {
    color:#6d0058;
}
a.header{
	color: white;
	text-decoration: none;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
.inner {
  //position: absolute;
}
.inner-container{
  width:500px;
  height:400px;
  //position:relative;
  overflow:hidden;
}

.box{
  position:absolute;
  font-family:Helvetica;
  color:white;
  padding:20px 20px;
  background-color:rgba(0,0,0,0.3);
  margin-left:20%;
  width: 50%;
}
.box input{
  display:block;
  width:40%;
  margin-top:20px;
  padding:15px;
  color:#fff;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}

.box button{
  background:#742ECC;
  border:0;
  color:#fff;
  padding:10px;
  font-size:20px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background: #17202a ;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#666;
}
form{
	padding-left:40px;
}
input{
	color:black;
}
input[type=text],input[type=number] {
    background-color: black;
    color: white;
}
</style>
<body>
<title>Event Management: Duty Edit</title>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Edit Profile Info</h4>
			</a>
		</div>
	</div>
</div>
<div id="nav">
<ul class="topnav">
  <li><a class="active" href="http://localhost/new_home.php">Home</a></li>
  <li><a href="http://localhost/profile.php">Profile</a></li>
  <li><a href="http://localhost/readme.docx">About</a></li>
  <li class="right"><a href="#about">Logout</a></li>
</ul>
</div>
<br></br>
<div class="inner-container">
<div class="box center">
	<form method="post" action="finish_edit_steps.php">

	<h3 class='topspace'>Edit Info</h3>
<?php
	$conn1 = new mysqli("localhost", "root", "", "event");
	if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
	//$id = $_GET['id'];
	$pid = $_GET['pid'];
	$edit = "SELECT * FROM steps_imp WHERE pd_index =".$pid;
	$res = $conn1->query($edit);
	if ($res->num_rows > 0) {
		while($row1 = $res->fetch_assoc()) {
			echo "<h4 style='margin:5px'>Time:</h4>";
			echo "<input type='text' id='myInput' placeholder='8am - 5pm' class='form-control' name='time' value=".$row1['time'].">";
			echo "<h4 style='margin:5px'>Place:</h4>";
			echo "<input type='text' id='myInput' placeholder='FSKTM BT1' class='form-control' name='place' value='".nl2br($row1['place'])."'>";
			echo "<h4 style='margin:5px'>Participants:</h4>";
			echo "<input type='text' id='myInput' placeholder='About 30 people' class='form-control' name='partNo' value=".$row1['partNo']."><br>";
			echo "<h4 style='margin:5px'>Fees:</h4>";
			echo "<input type='text' id='myInput' placeholder='RM40' class='form-control' name='fees' value=".$row1['fees']."><br>";
			echo "<h4 style='margin:5px'>Others:</h4>";
			echo "<input type='text' id='myInput' placeholder='RM40' class='form-control' name='other' value=".$row1['other']."><br>";
				echo "<input type='hidden' name='ins' value='1' />";

	
		}
		
	}else {
			echo "<h4 style='margin:5px'>Time:</h4>";
			echo "<input type='text' id='myInput' placeholder='8am - 5pm' class='form-control' name='time' >";
			echo "<h4 style='margin:5px'>Place:</h4>";
			echo "<input type='text' id='myInput' placeholder='FSKTM BT1' class='form-control' name='place'>";
			echo "<h4 style='margin:5px'>Participants:</h4>";
			echo "<input type='text' id='myInput' placeholder='About 30 people' class='form-control' name='partNo' ><br>";
			echo "<h4 style='margin:5px'>Fees:</h4>";
			echo "<input type='text' id='myInput' placeholder='RM40' class='form-control' name='fees'><br>";
			echo "<h4 style='margin:5px'>Others:</h4>";
			echo "<input type='text' id='myInput' placeholder='RM40' class='form-control' name='other'><br>";
			echo "<input type='hidden' name='ins' value='0' />";
	}
	$conn1->close();
	echo "<input type='hidden' name='pid' value='".$pid."' />";
	echo "<input type='submit' name='submit' value='Submit' class='final'>";
	echo "</form>";
	
?>
	

	<br></br>
    
</div>
</div>
</body>
</html>