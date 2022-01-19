<!-- Author: 42 -->
<!-- Purpose: To make a query to remove a trip-->

<?php
if(!$_POST['trip'])
{
        echo "<script>alert(\"Missing Parameter: Cannot Create Booking\")</script>";
}
else
{
        include "connectdb.php";
        $query = "SELECT count(*) FROM bookings WHERE tripID=".$_POST['trip'];
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }
	if(mysqli_fetch_assoc($result)['count(*)']==0)
        {
		$query="SELECT tripname FROM bustrip WHERE tripID=".$_POST['trip'];
		$result=mysqli_query($connection,$query);
		mysqli_close($connection);
		if(!$result)
        	{
                	die("Query Failed");
        	}

		echo "<script>";
		echo "var response = confirm(\"Delete Bus Trip: ".mysqli_fetch_assoc($result)['tripname']."\");";
		echo "if (response==false)
		{
			alert(\"Deletion Canceled\")
			location.replace(\"http://cs3319.gaul.csd.uwo.ca/vm160/a3Anthony/deleteBustrip.php?\")
		}
		else
		{
			location.replace(\"http://cs3319.gaul.csd.uwo.ca/vm160/a3Anthony/submitTripDelete.php?id=".$_POST['trip']."\")
		}";
		echo "</script>";
	}
	else
	{
                echo "<script>alert(\"Trip has bookings: Cannot delete Trip\")</script>";
        }
}
header("refresh:0;url=deleteBustrip.php");
?>
