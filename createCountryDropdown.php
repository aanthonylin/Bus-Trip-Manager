<!-- Author: 42 -->
<!-- Purpose: To fill the dropdown will data from the database -->

<?php
	include "connectdb.php";
	if (!isset($_POST['country'])) // Checks for the previous settings
	{
		$country="All Countries";
	}
	else
	{
		$country=$_POST['country'];
	}

	// Gets a list of all the countries in 'bustrip'
	$query = "SELECT DISTINCT country FROM bustrip ORDER BY country ASC";
	$result = mysqli_query($connection,$query);
	if(!$result)
	{
		die("Query Failed");
	}

	if ($country=="All Countries") // Adds the option to no limit the country
	{
		echo "<option selected=\"selected\" value=\"All Countries\">All Countries</option>";
	}
	else
	{
		echo "<option value=\"All Countries\">All Countries</option>";
	}

	while ($row = mysqli_fetch_assoc($result))
	{
		if($row['country']==$country) // If the option being added was the preveously selected option
		{
			echo "<option selected=\'selected\' value=\"". $row['country']."\">".$row['country']."</option>"; // Set the previous option as the default
		}
		else
		{
			echo "<option value=\"". $row['country']."\">".$row['country']."</option>";
		}
	}
	mysqli_close($connection);
?>
