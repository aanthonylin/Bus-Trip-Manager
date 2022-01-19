<!-- Author: 42 -->
<!-- Purpose: To create a page to change trip data-->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>It's Time for a Vacation</h1>

<h2>Change a Bus Trip</h2>

<form action="changeBusTrip.php" id="changeBustrip" method="post">
        <label>Trip ID: </label>
        <select name="tripID" name="tripID">
	<?php
		include "createTripDropdown.php"; //Creates a dropdown with options from the database
	?>
	</select>
        <br>
	<br>

	<label>Trip Name: </label>
        <input type="text" width="20" id="tripName" name="tripName">
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

	<label>Image: </label>
        <input type="url" id="image" name="image">
        <br>
	<br>

	<button type="submit">Change</button>
        <br>
	<br>
</form>
<br>

<form action="main.php" id="completedTripChange">
        <button type="button" onclick="this.form.submit()">Done</button>
</form>

</body>
</html>
