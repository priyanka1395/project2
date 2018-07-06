
<?php
require_once 'config.php';

	if(isset($_POST['submit']))
	{
		$battery_sap_code 	= $_POST['battery_sap_code'];
		$ah_rating 	= $_POST['ah_rating'];
		$brand 	= $_POST['brand'];
		$price 	= $_POST['price'];
		
		
		
				
		$date 		   = date("Y-m-d h:i:sa");
		
			
			$query1 = "INSERT INTO form(battery_sap_code,ah_rating,brand,price) 
			VALUES('$battery_sap_code','$ah_rating','$brand','$price')";
			
			$res = mysqli_query($mysqli, $query1) or die('-1'.mysqli_error());
		
			if($res) {
			header("Location:display_data.php");
				
			} else {
				echo "Failed.";
				
			}
			
			
		

	}
	?>