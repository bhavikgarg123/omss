

<!DOCTYPE html>
<html>
<head>
	<title>organisation management system</title>
</head>
<body>
<center><h1>Welcome to organisation management system</h1></center>
<?php echo @$_GET['edite'] ; ?>
<?php echo @$_GET['deleted'] ; ?>
<?php echo @$_GET['added'] ; ?>
<center><a href="add.php">add organisation</a></center><br>
<center><a href="amaze2.php?view=view">edit organisation</a></body><br>

</center>
<center>
<?php
$mysqli=new mysqli("localhost","root","","amaze");
if(isset($_GET['view']))
{
	
	
	$sql="SELECT * FROM amazes";
	 $run = $mysqli->query($sql);
	
		   
			while($row = $run->fetch_array()) 
			{ 
				$id=$row['id']; echo " &nbsp&nbsp&nbsp";
				$name=$row['name'];echo " &nbsp&nbsp&nbsp";
			echo "</br>";
	  
?>

<?php echo $id;?>
<?php echo $name;?>
<a href="edit.php?edit=<?php echo $id; ?>"><br>EDIT</a><br>
<a href="delete.php?del=<?php echo $id; ?>"><br>DELETE</a><br>

<?php
}}
?>

</center>
</body>
</html>