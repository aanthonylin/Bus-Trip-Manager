<!-- Author: 42 -->
<!-- Purpose: To fill a dropdown with data about the bus trips-->

<?php
     	include "connectdb.php";
        $query = "SELECT tripname, tripID FROM bustrip ORDER BY tripname ASC";
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }

	echo "<option selected=\"selected\" value=\"\">Select Trip</option>";
        while ($row = mysqli_fetch_assoc($result))
        {
               echo "<option value=\"". $row['tripID']."\">".$row['tripname']." ( Trip ID: ".$row['tripID'].") "."</option>";
        }
	mysqli_close($connection);
?>
