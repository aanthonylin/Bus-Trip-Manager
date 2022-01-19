<!-- Author: 42 -->
<!-- Purpose: To display the information about the bus trips-->

<?php
	include "connectdb.php";
	// Makes the query based on the user's selection
	$query = "SELECT * FROM bustrip";

	if (!$_POST['country'])
	{
		$country = "All Countries";
	}
	else
	{
		$country = $_POST['country'];
	}

	if (!$_POST['order'])
        { 
                $order = "ascTripName";
        }
        else
        { 
                $order = $_POST['order'];
        }	
	
	if ($country!="All Countries") // If there is a specified country
	{
		$query = $query." WHERE country=\"".$country."\"";
	}

	switch($order) // Adds the order in which the results should be displayed
	{
		case "ascTripName":
			$query = $query." ORDER BY tripname ASC";
			break;
		case "dscTripName":
			$query = $query." ORDER BY tripname DESC";
                        break;
		case "ascCountry":
                        $query = $query." ORDER BY country ASC";
                        break;
                case "dscCountry":
                        $query = $query." ORDER BY country DESC";
                        break;
	}

	// Gets the results of the query
	$result = mysqli_query($connection,$query);
	if(!$result)
	{
		die("Query Failed");
	}

	// Displays the results
	echo "<h2>Bus Trips</h2>";
	echo "<table style=\"width:800px\"><tr><th>Trip ID</th><th>Trip Name</th><th>Country</th><th>Start Date</th><th>End Date</th><th>Bus Licence Plate</th><th>Image</th></tr>";
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
		else
		{
			echo "<td></td>";
		}
		if($row['image'])
		{
			echo "<td><img src=\"".$row['image']."\" height=\"75\" width=\"75\"></td>";
		}
		else
		{
			echo "<td><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/HD_transparent_picture.png/800px-HD_transparent_picture.png\" height=\"75\" width=\"75\"></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($connection);
?>
