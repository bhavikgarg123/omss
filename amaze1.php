<!DOCTYPE html>
<html>
<head>
	<title>
		login
	</title>
	<script src="index.js"></script>
</head>
<body>

<h2>Already exist,Login please!!</h2>
<form action="" method="post">
<label>UserName:</label>
<input class="ab" type="text" name="name" value="" id="name" onblur="validationname('name')"></br>
<label>Password:</label>
<input class="ab" type="password" name="password" onblur="validationpass('password')"></br>
<input type="checkbox" name="remember" value="1">Keep me sign in</input></br>
<input type="submit" value="Login"  name="login" onclick="validation('button')">
</form>


</body>
</html>

<?php
$mysqli=new mysqli("localhost","root","","amaze");
if(isset($_POST['login']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	if($mysqli===false)
	{
		die("error could not connect".mysqli_connect_error());
	}

	$sql="SELECT name,password FROM amazess WHERE name=\"$name\" and password=\"$pass\"";
	if ($result = $mysqli->query($sql)) 
	{  
		if ($result->num_rows > 0)
		{    
			while($row = $result->fetch_array()) 
			{ 
					if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1)
				{
					setcookie("cook","1",time()+365*24*60*60);
					header("location:home.php"); 
				}
					else
					{
						setcookie("cook","1");
						header("location:amaze2.php"); 
					}
	
			}  
	    }
		else
		{ 
			echo "<h1>First Register yourself.</h1>";  
		} 
	} 
	else 
	{   
		echo "ERROR:could not execute $sql" .$mysqli->error;
	}  
   $mysqli->close();
}
?>

