<!-- Author: 42 -->
<!-- Purpose:To create a page that shows the empty trips -->

<!DOCTYPE html>
<html>
<head>
      	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>It's Time for a Vacation</h1>

<?php
	include "connectdb.php";
	include "makeEmptyTripTable.php";
	mysqli_close($connection);
?>

<form action="main.php" id="back">
	<button onclick="this.form.submit()">Back</button>
</form>

</body>
</html>
