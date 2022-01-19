<!-- Author: 42 -->
<!-- Purpose: Makes the query to delete a trip -->

<?php
	include "connectdb.php";
	$query = "DELETE FROM bustrip WHERE tripID=".$_GET['id'];
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }
        echo "<script>alert(\"Confirmed: Bus Trip Deleted\")</script>";
	mysqli_close($connection);
	header("refresh:0;url=deleteBustrip.php");
?>
