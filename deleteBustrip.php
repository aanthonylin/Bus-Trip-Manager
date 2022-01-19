<!-- Author: 42 -->
<!-- Purpose: To create a page to delete bus trips-->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<h2>Remove a Bus Trip</h2>

<form action="removeTrip.php" id="deleteTrip" method="post">
	<label>Trip: </label>
        <select name="trip" id="trip" value="trip">
        <?php
             	include "createTripDropdown.php"; //Adds options to the dropdown
        ?>
	</select>
        <br>
	<br>

	<button type="submit">Delete</button>
        <br>
	<br>
</form>

<form action="main.php" id="completeBusDelete">
        <button type="button" onclick="this.form.submit()">Done</button>
</form>

</body>
</html>
