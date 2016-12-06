<!DOCTYPE html>
<html>
<head>
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
	<title>Event Mangement System: To-do List</title>

<style>
body {
    background-color:white;
	overflow = auto;
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

p{
	font-family: Helvetica;
	color: black;
	text-align:center;
	float: clear;
	position: relative;
	top:120px;
	
}

a{
	color: blue;
	text-decoration: none;
}
label{
	color:black;
	font-size:24px;
}
textarea{
	font-size:16px;
}
div.info{
	background:#FFD8D7;
	margin:10px;
	padding:10px;
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
input.update{
	margin:10px;
}
input.final{
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
input.final:hover{
	background-color: #45a049;
}
input.final:active{
	background-color: #45a049;
	color: black;
	transform: translateY(4px);
}
thead{
	background-color:#333;
	color:white;
}
tbody{
	background-color:white;
}
th:hover{
	color:#FDFFD0;
}
td:hover{
	background-color:#FDFFD0;
}
i.sort:hover{
	color:#FF8663;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">To-do List</h4>
			</a>
		</div>
	</div>
</div>
<div id="nav">
<ul class="topnav">
  <li><a class="active" href="http://localhost/new_home.php">Home</a></li>
  <li><a href="http://localhost/profile.php">Profile</a></li>
  <li><a href="http://localhost/memberlist.php">Member</a></li>
  <li><a href="http://localhost/email_start.php">Email</a></li>
  <li><a href="http://localhost/doc_list.php">Documents</a></li>
  <li><a href="http://localhost/readme.docx">About</a></li>
  <li><a href="http://localhost/event_search.php" target="_blank"><span class="glyphicon glyphicon-search"></span></a></li>
  <li class="right"><a href="#about">Logout</a></li>
</ul>
</div>
<br></br>
<body>
<div class="container">
<h1 style="margin:5px">Budget</h1>
<br>
<form action="finish_add_budget.php" method="post">
<h4 style="margin:5px">Short Description:</h4>
<input type="text" id="myInput" placeholder="Title..." class="form-control" name="name">
<h4 style="margin:5px">Long Description:</h4>
<input type="text" id="myInput" placeholder="..." class="form-control" name="description">
<h4 style="margin:5px">Budget:</h4>
<input type="number" min="0" max="20000" id="myInput" placeholder="1500.0" class="form-control" name="amount"><br>
<label class="radio-inline"><input type="radio" name="type" value='income'>Income</label>
<label class="radio-inline"><input type="radio" name="type" value='expense'>Expense</label>
<?php 
$id = $_GET['pid'];
echo "<input type='hidden' name='pid' value=".$id.">";
?>
<button type = 'submit' name = 'submit' value = 'submit' class='btn btn-success btn-md btn-block' >Add</button></form>
<br>
<table class='table table-stripped'>
<thead>
<tr>
<th>Name</th>
<th>Description</th>
<th>Expense</th>
<th>Income</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

$con = new mysqli("localhost", "root", "", "event");
if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
}
$total1 = $total2 = 0;
$id = $_GET['pid'];

$sql = "SELECT * FROM budget_plan WHERE pd_index=".$id;
$rl = $con->query($sql);
if ($rl->num_rows > 0) {
	while( $row = mysqli_fetch_array($rl)) {
		echo "<tr class='info'>";
		if($row['type']=='expense'){
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td>".number_format($row['amount'],2,'.','')."</td>";
			echo "<td>-</td>";
			$total1 += $row['amount'];
		}else{
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td>-</td>";
			echo "<td>".number_format($row['amount'],2,'.','')."</td>";
			$total2 += $row['amount'];
		}
		echo "<td><a href='edit_budget_2.php?id=".$row["bid"]."&pid=".$row['pd_index']."' target='_blank'><i class='fa fa-edit'></i> Edit </a>
		<a href='remove_budget.php?id=".$row["bid"]."&pid=".$row['pd_index']."'><i class='fa fa-ban'></i> Remove </a></td>";
		echo "</tr>";
		}
		echo "<tr class='info'><td>Total</td><td>-</td><td>".number_format($total1, 2, '.', '')."</td><td>".number_format($total2, 2, '.', '')."</td><td>-</td></tr>";
	
}
		 
?>
</tbody>
</table>
</div>
</body>
<script type="text/javascript">
/*function CheckColors(val){
 var element=document.getElementById('url');
 if(val=='Empty'||val=='other')
   element.style.display='block';
 else  
   element.style.display='none';
}*/

</script> 
</html>