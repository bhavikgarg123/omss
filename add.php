<!DOCTYPE html>
<html>
<head>
	<title>add organisation</title>
</head>
<body>
<form action="add.php" method="post">
<table align="center" width="500"> 
<tr>
<td align="center">
Organisation Name:</td>
<td><input type="text" name="name" size="30" align="right"></td>
</tr>
<tr>
<td colspan="5" align="center">
<input type="submit" name="add" value="add">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
$mysqli=new mysqli("localhost","root","","amaze");
if(isset($_POST['add']))
{
	$name=$_POST['name'];
	
	
	if($mysqli===false)
	{
		die("error could not connect".mysqli_connect_error());
	}
$sql="insert into amazes(name) values(\"$name\")";
if($mysqli->query($sql)=== true)
{
	
	echo "<script>window.open('amaze2.php?added=added successfully','_self')</script>";
	
}
else{
	echo "ERROR:could not execute $sql" .$mysqli->error;
}
$mysqli->close();
}
?>

