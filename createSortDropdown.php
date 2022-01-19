<!-- Author: 42 -->
<!-- Purpose: To fill a dropdown with sort options-->

<?php
	if(!isset($_POST['order']))
	{
		$sort="ascTripName";
	}
	else
	{
		$sort=$_POST['order'];
	}
     	if($sort=="ascTripName")
	{
                echo "<option selected=\"selected\" value=\"ascTripName\">Trip Name (&uarr;)</option>";
                echo "<option value=\"dscTripName\">Trip Name (&darr;)</option>";
                echo "<option value=\"ascCountry\">Country (&uarr;)</option>";
                echo "<option value=\"dscCountry\">Country (&darr;)</option>";
        }
	elseif($sort=="dscTripName")
        {
                echo "<option value=\"ascTripName\">Trip Name (&uarr;)</option>";
                echo "<option selected=\"selected\"value=\"dscTripName\">Trip Name (&darr;)</option>";
                echo "<option value=\"ascCountry\">Country (&uarr;)</option>";
                echo "<option value=\"dscCountry\">Country (&darr;)</option>";
        }
	elseif($sort=="ascCountry")
        {
                echo "<option value=\"ascTripName\">Trip Name (&uarr;)</option>";
                echo "<option value=\"dscTripName\">Trip Name (&darr;)</option>";
                echo "<option selected = \"selected\" value=\"ascCountry\">Country (&uarr;)</option>";
                echo "<option value=\"dscCountry\">Country (&darr;)</option>";
        }
	else // Sets it to decending by country
        {
                echo "<option value=\"ascTripName\">Trip Name (&uarr;)</option>";
                echo "<option value=\"dscTripName\">Trip Name (&darr;)</option>";
                echo "<option value=\"ascCountry\">Country (&uarr;)</option>";
                echo "<option selected=\"selected\" value=\"dscCountry\">Country (&darr;)</option>";
        }
?>
