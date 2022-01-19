<!-- Author: 42 -->
<!-- Purpose: To fill the dropdown with passenger data-->

<?php
	include "connectdb.php";
	$query = "SELECT firstName, lastName, passportNumber FROM passenger ORDER BY firstName ASC";
       	$result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }

        echo "<option selected=\"selected\" value=\"\">Select Passenger</option>";
	while ($row = mysqli_fetch_assoc($result))
        {
               echo "<option value=\"". $row['passportNumber']."\">".$row['firstName']." ".$row['lastName']." (".$row['passportNumber'].") "."</option>"; // Adds the passenger to the dropdown
        }
	mysqli_close($connection);
?>
