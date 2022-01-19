<!-- Author: 42 -->
<!-- Purpose: To make a page that shows the bookings -->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<form action="showBookings.php" id="passengerDropdown" method="post">
	<label>Show bookings for: </label>
	<select name="passenger" id="passenger" onchange="this.form.submit()">
		<?php
			include "createPassengerDropdown.php";
		?>
		<option value="All">All Passengers</option>
	</select>
</form>

<?php
     	include "connectdb.php";
	include "makeBookingsTable.php";
        mysqli_close($connection);
?>

<h2>Add/Delete Bookings</h2>
<form action="addBooking.php" id="addBooking">
	<button onclick="this.form.submit()">Add Booking</button>
</form>
<br>

<form action="deleteBooking.php" id="deleteBooking">
        <button onclick="this.form.submit()">Delete Booking</button>
</form>
<br>
<br>
<br>

<form action="main.php" id="back">
        <button onclick="this.form.submit()">Back</button>
</form>



</body>
</html>
