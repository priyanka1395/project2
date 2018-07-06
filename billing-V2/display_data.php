<?php
include "includes/header.php";
include "includes/navigation.php";

include "config.php";
session_start();

$sqlsmt = "SELECT * FROM form ORDER BY product_id DESC LIMIT 1";
$result1 = mysqli_query($mysqli, $sqlsmt);
$row1 = $result1->fetch_array(MYSQLI_BOTH);

?> 
<div class="page-top extra-gap" style="background-color: #6600CC;">
	<div class="container">
		<h1>ADD PRODUCTS</h1>
		<ul>
			<li><a href="index.php" title=""><i class="fa fa-home"></i> Home</a></li>
			<li><a href="product_add.php" title="">Add Products</li>
			<li>Product Details</li>
		</ul>
	</div>	
</div><!-- Page Top -->




<section>
        <div class="block" style="background-color:#f892c1;">
		<h1 style="text-align:center; color:#4E387E; text-shadow:3px 2px pink;";><strong>PRODUCT DETAILS</strong></h1>
		<div class="container">
            <!--div class="sec-title text-center">
                <h2>Our <span class="normal-font theme_color">Mission</span></h2>
                <div class="text">Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium dolor amet amet qco modo cum text </div>
            </div-->
            
			<br>
			<br>
            <div class="row">
                <div class="col-md-12 column">	
				<div class="tab-details style2 dark">
				<div class="tab-description">
				<table style="width:100%; border: 4px solid #ccc;margin:0; ">
                <!--table class="" style="border: 4px solid #ccc;margin:0;  padding: 15px;"-->
					
					
					<tr><th>Battery Sap Code:</th><td><?php echo $row1["battery_sap_code"]; ?></td></tr>
					<tr><th>Ah_Rating:</th><td><?php echo $row1["ah_rating"]; ?></td></tr>
					<tr><th>Brand:</th><td><?php echo $row1["brand"]; ?></td></tr>
					<tr><th>Price:</th><td><?php echo $row1["price"]; ?></td></tr>
				
					
					
				</table>
				</div>
                </div>
             </div>   
			 </div>
                
            </div>
        </div>
    </section>






<?php include "includes/footer.php" ?>