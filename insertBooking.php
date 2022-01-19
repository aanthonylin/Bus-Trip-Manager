<!-- Author: 42 -->
<!-- Purpose: To make a query to add a booking-->

<?php
if(!$_POST['passenger'] or !$_POST['trip'] or !$_POST['price'])
{
	echo "<script>alert(\"Missing Parameter: Cannot Create Booking\")</script>";
}
else
{
     	include "connectdb.php";
        $query = "SELECT count(*) FROM bookings WHERE tripID=".$_POST['trip']." and passengerID=(SELECT passengerID FROM passenger WHERE passportNumber=\"".$_POST['passenger']."\")";
       	$result = mysqli_query($connection,$query);
        if(!$result)
      	{
                die("Query Failed");
        }
	if(mysqli_fetch_assoc($result)['count(*)']==0)
	{
		$query = "INSERT INTO bookings(passengerID,tripID,price) VALUES ((SELECT passengerID FROM passenger WHERE passportNumber=\"".$_POST['passenger']."\"),".$_POST['trip'].",".$_POST['price'].")";
		$result = mysqli_query($connection,$query);
		if(!$result)
        	{
                	die("Query Failed");
        	}
		echo "<script>alert(\"Confirmed: Booking Created\")</script>";	
	}
	else
	{
		echo "<script>alert(\"Passenger is already on this Trip: Cannot Create Booking\")</script>";
	}
	mysqli_close($connection);
}
header("refresh:0;url=addBooking.php");
?>


