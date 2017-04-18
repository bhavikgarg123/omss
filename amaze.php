<!DOCTYPE html>
<html>
<head>
	<title>
		register
	</title>
</head>
<body>
<h2>&nbsp&nbsp&nbsp&nbsp<center>New User Please Register!!</center></h2>
<form action="" align="center" method="post" id="form" onsubmit="return ss(this)" >
<label>UserName:</label>
<input class="nice"  id="name" value="" type="text" placeholder="Name" name="user"></br></br>
<label>Email:</label>
<input class="nice" id="email" value="" type="text" placeholder="email" name="email"></br></br>
<label>Password:</label>
<input class="nice" id="password" value="" type="password" placeholder="password" name="password"></br></br>
<label>Confirm Password</label>
<input class="nice" id="cpassword" value="" type="password" placeholder="confirm password" name="cpassword"></br></br>
<label>Contact No:</label>
<input class="nice" id="contact" value="" type="text" placeholder="mobile number" name="contact"></br></br>
<input class="abc" type="submit" value="submit" name="submit"></br>
</form>



</body>
</html>
 
<?php 
$mysqli=new mysqli("localhost","root","","amaze");
if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=(int)$_POST['contact'];
	
	if($mysqli===false)
	{
		die("error could not connect".mysqli_connect_error());
	}
$sql="insert into amazess(name,email,password,contact) values(\"$user\",\"$email\",\"$password\",$contact)";
if($mysqli->query($sql)=== true)
{
	
	header("location:amaze1.php");
}
else{
	echo "ERROR:could not execute $sql" .$mysqli->error;
}
$mysqli->close();
}
?>

