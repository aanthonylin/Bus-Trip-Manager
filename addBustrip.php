<!-- Author: 42 -->
<!-- Purpose: Creates a page to add bus trips -->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<h2>Add a Bus Trip</h2>

<form action="insertBusTrip.php" id="addBustrip" method="post">
	<label>Trip ID: </label>
        <input type="number" min="1" step="1" id="tripID" name="tripID">
        <br>
	<br>

	<label>Trip Name: </label>
	<input type="text" width="20" id="tripName" name="tripName">
	<br>
	<br>

	<label>Country: </label>
	<input type="text" width="20" id="country" name="country">
	<br>
	<br>

	<label>Start Date: </label>
	<input type="date" id="startDate" name="startDate">
	<br>
	<br>

	<label>End Date: </label>
        <input type="date" id="endDate" name="endDate">
        <br>
        <br>

	<label>Licence Plate</label>
	<select id="licence" name="licence">
		<?php
			include "createBusDropdown.php"; //Gets the options for the dropdown from the database;
		?>
	</select>
	<br>
	<br>

	<label>Image: </label>
	<input type="url" id="image" name="image">
	<br>
	<br>

	<button type="submit">Add</button>
        <br>
	<br>
</form>
<br>

<!--Makes a back button-->>
<form action="main.php" id="completedTripAdd">
        <button type="button" onclick="this.form.submit()">Done</button>
</form>

</body>
</html>
