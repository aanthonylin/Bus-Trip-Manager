<!-- Author: 42 -->
<!-- Purpose: To make a query to change information about a bus trip -->

<?php
	if(!$_POST['tripID']) // If there is not enough data
	{
        	echo "<script>alert(\"Missing Parameter: Cannot Create Booking\")</script>";
	}
	else
	{
        	include "connectdb.php";
        	$query = "UPDATE bustrip SET tripID=".$_POST['tripID'];
        	if($_POST['tripName'])
                {
                        $query=$query.", tripname=\"".$_POST['tripName']."\"";
                }
		if($_POST['startDate'])
                {
                        $query=$query.", startDate=\"".$_POST['startDate']."\"";
                }
		if($_POST['endDate'])
                {
                        $query=$query.", endDate=\"".$_POST['endDate']."\"";
                }
		if($_POST['licence'])
        	{
                	$query=$query.", licencePlate=\"".$_POST['licence']."\"";
        	}
        	if($_POST['image'])
        	{
                	$query = $query.", image=\"".$_POST['image']."\"";
        	}
        	$query = $query." WHERE tripID=".$_POST['tripID']; //Makes the query based on what is set

        	$result = mysqli_query($connection,$query);
        	if(!$result)
        	{
                	die("Query Failed");
        	}
        	echo "<script>alert(\"Confirmed: Bus Trip Changed\")</script>";
	}
	mysqli_close($connection);
	header("refresh:0;url=changeTrip.php"); // Redirects backwards automatically
?>
