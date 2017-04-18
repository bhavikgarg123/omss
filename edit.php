<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<?php
$mysqli=new mysqli("localhost","root","","amaze");
$editid=@$_GET['edit'];
$sql="select * from amazes where id='$editid'";
 $run = $mysqli->query($sql);
	
		   
			while($row = $run->fetch_array()) 
			{ 
				$id1=$row['id'];
				$name=$row['name'];
			echo "</br>";


?>
<form action="edit.php?editform=<?php echo $id1;?>" method="post">
<input type="text" name="name" value="<?php echo $name;?>"/>
<input type="submit" name="update" value="update">
<?php } ?>
</form>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$updateid=$_GET['editform'];
	$name=$_POST['name'];
	$update="update amazes set name='$name' where id='$updateid'";
	if($mysqli->query($update))
	{
		echo "<script>window.open('amaze2.php?edite=Update successfully','_self')</script>";

	}
}






?>