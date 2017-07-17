<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>furniture bazaar</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/jquery-ui.min.css" rel="stylesheet">
	<link href="css/jquery-ui.structure.min.css" rel="stylesheet">
	<link href="css/jquery-ui.theme.min.css" rel="stylesheet">
	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
	<link rel="stylesheet" type="text/css" href="Css/reset.css">
	<link rel="stylesheet" type="text/css" href="Css/furniture.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php 
include_once 'header.html';
include_once 'navigation.html';
 ?>

<main>
<div class="page-wrapper">




	<div class="produse container"  > 
		<div class="col-md-9 product1" id="output-place">
				
					
				
		</div>

	

	<div class="col-md-3 prod-rgt">
		<div class="dreapta-cont">
				<div class=" pro-tp">
					<div id="slider-price-container" class="slidyy"></div>
						<p> 
						    <label for="amount">Price range:</label>
						    <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
						</p>
		
					<div id="slider-range"></div><br>

						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<button id="bed" value="3">Beds</button>

						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<button id="tables-prod" value="2">Tables</button>

						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<button id="chairs" value="1">Chairs</button>

						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<button id="resetfilters" >Reset filters</button>
	
						<div class="clearfix"></div>
				</div>
		</div>
	</div>
				<div class="clearfix"></div>
		


</div>

</div>
</main>

<?php include_once 'footer.html'; ?>

<!--<script src="https://code.jquery.com/jquery-3.2.0.min.js" type="text/javascript"></script>-->
<script src="js/jquery-3.2.0.min.js"></script>
<!--<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="SCRIPTS/scripts.js" type="text/javascript"></script> 
</body>
</html>