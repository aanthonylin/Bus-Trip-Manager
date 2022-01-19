<!-- Author: 42 -->
<!-- Purpose: Create a page to delete bookings -->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<h2>Remove a booking</h2>

<form action="removeBooking.php" id="deleteBooking" method="post">
        <label>Passenger: </label>
        <select name="passenger" id="passenger" value="passenger">
        <?php
             	include "createPassengerDropdown.php";
        ?>
	</select>
        <br>
	<br>

	<label>Trip: </label>
        <select name="trip" id="trip" value="trip">
        <?php
             	include "createTripDropdown.php"; // Adds options to the dropdown
        ?>
	</select>
        <br>
	<br>

	<button type="submit">Delete</button>
        <br>
	<br>
</form>

<!--Creates a back button-->
<form action="showBookings.php" id="completedBooking Delete">
        <button type="button" onclick="this.form.submit()">Done</button>
</form>

</body>
</html>
