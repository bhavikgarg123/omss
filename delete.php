<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
</head>
<body>
<?php
$mysqli=new mysqli("localhost","root","","amaze");
$deleteid=$_GET['del'];
$delete="delete from amazes where id='$deleteid'";
if( $mysqli->query($delete))
{
	echo "<script>window.open('amaze2.php?deleted=Delete successfully','_self')</script>";

}


?>



</body>
</html>