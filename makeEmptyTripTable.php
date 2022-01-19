<!-- Author: 42 -->
<!-- Purpose: To make a table to show the empty trips -->

<?php
	$query="SELECT * FROM bustrip WHERE tripID NOT IN (SELECT DISTINCT tripID FROM bookings)";
	$result = mysqli_query($connection,$query);
	if(!$result)
        {
                die("Query Failed");
        }

	// Displays the results
        echo "<h2>Empty Bus Trips</h2>";
        echo "<table style=\"width:800px\"><tr><th>Trip ID</th><th>Trip Name</th><th>Country</th><th>Start Date</th><th>End Date</th><th>Bus Licence Plate</th></tr>";
        while ($row = mysqli_fetch_assoc($result))
        {
                echo "<tr>";
                echo "<td>".$row['tripID']."</td>";
                echo "<td>".$row['tripname']."</td>";
                echo "<td>".$row['country']."</td>";
                echo "<td>".date('Y-m-d', strtotime($row['startdate']))."</td>";
                echo "<td>".date('Y-m-d', strtotime($row['enddate']))."</td>";
                if($row['licencesPlate'])
                {
                        echo "<td>".$row['licencesPlate']."</td>";
                }
                echo "</tr>";
        }
	echo "</table>";
	echo "<br><br>";
?>
