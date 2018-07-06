<?php
include "includes/header.php";
include "includes/navigation.php";
?> 
<div class="page-top extra-gap" style="background-color: #6600CC;">
	<div class="container">
		<h1>ADD PRODUCTS</h1>
		<ul>
			<li><a href="index.php" title=""><i class="fa fa-home"></i> Home</a></li>
			<li>Add Products</li>
			
		</ul>
	</div>	
</div><!-- Page Top -->




<section>
	<div class="block" style="background-color:#f892c1;">
	
		<div class="container">
		
			<div class="row">
				<div class="col-md-12 column">	
					<div class="tab-details style2 dark">
						
						<div class="tab-description">
						
							<div>
								  <form action="add_product_process.php" method="post">
								  <h1 style="text-align:center; color:#4E387E; text-shadow:3px 2px pink;";><strong>ADD PRODUCT FORM</strong></h1>
								  <br>
								  <br>
									<label for="battery_sap_code" style="color:#151B8D; font-size:20px;">Battery Sap Code</label>
									<input type="text" id="battery_sap_code" name="battery_sap_code" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
									
									
									<label for="ah_rating" style="color:#151B8D; font-size:20px;">Ah_Rating</label>
									<input type="text" id="ah_rating" name="ah_rating" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
									
									<label for="brand" style="color:#151B8D; font-size:20px;">Brand</label>
									<input type="text" id="brand" name="brand" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
									
									<label for="price" style="color:#151B8D; font-size:20px;">Price</label>
									<input type="text" id="price" name="price" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">

									
								  
									<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger; color:white; background-color: #151B8D; border: 3pt ridge lightgrey 
									height:450px; width:200px; padding:20px " value="Submit" name="submit" >
								  </form>
							</div>
							
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>







<?php include "includes/footer.php" ?>