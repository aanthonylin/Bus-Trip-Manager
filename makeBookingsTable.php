<!-- Author: 42 -->
<!-- Purpose: To make a table showing the bookings-->

<?php	
	$query = "SELECT * FROM passenger INNER JOIN bookings USING (passengerID) INNER JOIN bustrip USING (tripID) WHERE passportNumber=\"".$_POST['passenger']."\"";
	if (!$_POST['passenger'] or $_POST['passenger']=="All")
	{
		$query = "SELECT * FROM passenger INNER JOIN bookings USING (passengerID) INNER JOIN bustrip USING (tripID)";	
	}

        $result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }

	// Displays the results
        echo "<h2>Bookings</h2>";
        echo "<table style=\"width:800px\"><tr><th>First Name</th><th>Last Name</th><th>Passport Number</th><th>Trip Name</th><th>Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result))
        {
                echo "<tr>";
                echo "<td>".$row['firstName']."</td>";
                echo "<td>".$row['lastName']."</td>";
                echo "<td>".$row['passportNumber']."</td>";
                echo "<td>".$row['tripname']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "</tr>";
        }
	echo "</table>";
        echo "<br><br>";
?>
