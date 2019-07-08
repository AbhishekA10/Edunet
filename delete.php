<?php
include("educonnect.php");

if(isset($_REQUEST['d']))
{
	$id=$_REQUEST['d'];
	$sql=mysqli_query($con,"delete from contact where id='$id'");
	if($sql)
	{
		echo "<script>alert('Deleted successfully')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
	else
	{
		echo "<script>alert('Not Deleted successfully')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
}
?>