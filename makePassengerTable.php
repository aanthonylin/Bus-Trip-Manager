<!-- Author: 42 -->
<!-- Purpose: To make a table showing all the passengers-->

<?php
	$query = "SELECT * FROM passenger INNER JOIN passport USING (passportNumber) ORDER BY lastName ASC";
	$result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }

	// Displays the results
        echo "<h2>Passengers</h2>";
        echo "<table style=\"width:800px\"><tr><th>First Name</th><th>Last Name</th><th>Birthday</th><th>Citizenship</th><th>Expiry Date</th><th>Passport Number</th></tr>";
        while ($row = mysqli_fetch_assoc($result))
        {
                echo "<tr>";
                echo "<td>".$row['firstName']."</td>";
		echo "<td>".$row['lastName']."</td>";
		echo "<td>".$row['birthDate']."</td>";
		echo "<td>".$row['citizenship']."</td>";
		echo "<td>".$row['expiry']."</td>";
		echo "<td>".$row['passportNumber']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br><br>";
?>
