<!-- Author: 42 -->
<!-- Purpose: To make a query to remove a booking -->

<?php
if(!$_POST['passenger'] or !$_POST['trip'])
{
        echo "<script>alert(\"Missing Parameter: Cannot Delete Booking\")</script>";
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
	if(mysqli_fetch_assoc($result)['count(*)']!=0)
        {
		echo "<script>";
                echo "var response = confirm(\"Delete Bus Trip: ".mysqli_fetch_assoc($result)['tripname']."\");";
                echo "if (response==false)
                {
                        alert(\"Deletion Canceled\")
                        location.replace(\"http://cs3319.gaul.csd.uwo.ca/vm160/a3Anthony/deleteBooking.php?\")
                }
                else
                {
                        location.replace(\"http://cs3319.gaul.csd.uwo.ca/vm160/a3Anthony/submitBookingDelete.php?trip=".$_POST['trip']."&passenger=".$_POST['passenger'].""\")
                }";
                echo "</script>";
        }
	else
	{
		$query = "SELECT firstName, lastName FROM passenger WHERE passportNumber=\"".$_POST['passenger']."\"";
		$result = mysqli_query($connection,$query);
		if(!$result)
        	{
                	die("Query Failed");
        	}
		$row = mysqli_fetch_assoc($result);
		$tripinfo =  $row['firstName']." ".$row['lastName']." (".$_POST['passenger'].")";

		$query = "SELECT tripname FROM bustrip WHERE tripID=".$_POST['trip'];
		$result	= mysqli_query($connection,$query);
                if(!$result)
                {
			die("Query Failed");
                }
                $row = mysqli_fetch_assoc($result);
		$tripinfo = $tripinfo." going to ".$row['tripname'];
                echo "<script>alert(\"Booking not found: No booking for ".$tripinfo."\")</script>";
        }
	mysqli_close($connection);
}
header("refresh:0;url=deleteBooking.php");
?>
