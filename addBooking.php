<!-- Author: 42 -->
<!-- Purpose: Creates a page to add bookings -->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<h2>Add a booking</h2>

<form action="insertBooking.php" id="addBooking" method="post">
	<label>Passenger: </label>
	<select name="passenger" id="passenger" value="passenger">
	<?php
		include "createPassengerDropdown.php"; //Gets the options for the dropdown from the database
	?>
	</select>
	<br>
	<br>

	<label>Trip: </label>
	<select name="trip" id="trip" value="trip">
	<?php
		include "createTripDropdown.php" //Gets the options for the dropdown from the database
	?>
	</select>
	<br>
	<br>

	<label>Price: </label>
	<input type="number" min="0.01" step="0.01" id="price" name="price">
	<br>
	<br>

	<button type="submit">Add</button>
	<br>
	<br>
</form>

<!- A button to go back--->
<form action="showBookings.php" id="completedBookingAdd">
	<button type="button" onclick="this.form.submit()">Done</button>
</form>

</body>
</html>
