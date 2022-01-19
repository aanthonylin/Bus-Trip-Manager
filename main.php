<!-- Author: 42 -->
<!-- Purpose: To create the main page-->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<form name="sortDropdown" method="post" action="main.php">
	<!--Dropdown menu to select the sort order-->
	<label for="sortOrder">Sort by:</label>
	<select name="order" id="order" onchange="this.form.submit()">
	<?php
		include "createSortDropdown.php";
	?>
	</select>

	<!--Dropdown menu to select the country-->
	<label for="displayCountries">&emsp;&emsp;Happens in:</label>
	<select name="country" id="country" onchange="this.form.submit()">
	<?php
		include "createCountryDropdown.php";
	?>		
	</select>
	<br><br>
</form>

<!--Displays the contents of bustrip-->
<?php
	include "displayTrips.php";
?>

<h2>Alter Bus Data</h2>

<form action="addBustrip.php" id="addTrip">
	<button type="button" onclick="this.form.submit()">Add bus trip</button>
</form>
<br>
<form action="changeTrip.php" id="changeTrip">
	<button type="button" onclick="this.form.submit()">Change bus trip</button>
</form>
<br>
<form action="deleteBustrip.php" id="deleteBusTrip">
	<button type="button" onclick="this.form.submit()">Delete bus trip</button>
</form>
<br>

<h2>Show other data</h2>
<form action="showBookings.php" id="bookings">
	<button type="button" onclick="this.form.submit()">Show Bookings</button>
</form>
<br>

<form action="showPassengers.php" id=passengers>
	<button type="button" onclick="this.form.submit()">Show Passengers</button>
</form>
<br>

<form action="showEmptyTrips.php" id="emptyTrips">
	<button type="button" onclick="this.form.submit()">Show Empty Bus Trips</button>
</form>
<br>
<br>

</body>
</html>
