<!-- Author: 42 -->
<!-- Purpose: To make a query to create a bus trip-->

<?php
if(!$_POST['tripID'] or !$_POST['tripName'] or !$_POST['country'] or !$_POST['startDate'] or !$_POST['endDate'])
{
        echo "<script>alert(\"Missing Parameter: Cannot Create Booking\")</script>";
}
else
{
        include "connectdb.php";
        $query = "SELECT count(*) FROM bustrip WHERE tripID=".$_POST['tripID'];
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
                die("Query Failed");
        }
	if(mysqli_fetch_assoc($result)['count(*)']==0)
        {
		$queryF = "INSERT INTO bustrip(tripID,tripname,country,startDate,endDate";
		$queryB = ") VALUE (".$_POST['tripID'].",\"".$_POST['tripName']."\",\"".$_POST['country']."\"";
		if ($_POST['startDate'] <= $_POST['endDate'])
		{
			$queryB	= $queryB.",\"".$_POST['startDate']."\",\"".$_POST['endDate']."\"";
		}
		else
		{
			$queryB = $queryB.",\"".$_POST['endDate']."\",\"".$_POST['startDate']."\"";
		}
		if($_POST['licence'])
		{
			$queryF=$queryF.","."licencesPlate";
			$queryB=$queryB.",\"".$_POST['licence']."\"";
		}
		if($_POST['image'])
		{
			$queryF=$queryF.","."image";
                        $queryB=$queryB.",\"".$_POST['image']."\"";
		}
                $query = $queryF.$queryB.")";
                $result = mysqli_query($connection,$query);
                if(!$result)
                {
                        die("Query Failed");
                }
                echo "<script>alert(\"Confirmed: Bus Trip Created\")</script>";
        }
	else
	{
                echo "<script>alert(\"Trip ID already in use: Cannot Create Bus Trip\")</script>";
        }
	mysqli_close($connection);
}
header("refresh:0;url=addBustrip.php");
?>
