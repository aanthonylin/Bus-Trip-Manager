<!-- Author: 42 -->
<!-- Purpose: Makes the query to delete a trip -->

<?php
     	include "connectdb.php";
	$query = "DELETE FROM bookings WHERE passengerID=(SELECT passengerID FROM passenger WHERE passportNumber=\"".$_GET['passenger']."\") AND tripID=".$_GET['trip'];
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
  		die("Query Failed");
        }
        echo "<script>alert(\"Confirmed: Booking Deleted\")</script>";
        mysqli_close($connection);
        header("refresh:0;url=deleteBustrip.php");
?>
