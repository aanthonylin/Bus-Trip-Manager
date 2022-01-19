<!-- Author: 42 -->
<!-- Purpose: To fill the dropdown with data from the bus table -->

<?php
     	include "connectdb.php";
        $query = "SELECT licencesPlate FROM bus ORDER BY licencesPlate ASC";
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }

	echo "<option selected=\"selected\" value=\"\">Select Bus</option>";
        while ($row = mysqli_fetch_assoc($result))
        {
               echo "<option value=\"". $row['licencesPlate']."\">".$row['licencesPlate']."</option>"; //Adds the value to the dropdown
        }
	mysqli_close($connection);
?>
