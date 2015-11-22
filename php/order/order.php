
<!DOCTYPE html>

<html lang="en">
	<head>
		<?php include 'index_headers.php';?>
		<title> Sweet Treats </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<script>
			$(document).ready(function(){
			(function () {
			$("#orderMenuHeading").addClass("active");
    })();
	});
	</script>

	</head>
	<body>
		<div class="myContainer">
		    <div class="leftGutter"></div>
		    <div class="centralColumn">
		    	<div id="header"><?php include 'header.php';?></div>
		    				<div class="content1 orderFormDiv">

<!--
1. calendar
2.
-->

<!---- ==================================== Order Form ===================================================---->
	<div id="container-order-form">

	<div class="notes">
					<h2 class="text-center"> To our dear customers, please take a note:</h2>
						<p>Maha decorates your treats especially for you. As a result, we don't imitate pictures. If you want to send some pictures for ideas, that's great.
		We'll use your idea and give you desserts you'll love, but we do not simply do reproductions.<br /><br/>

	   <strong>Placing an order:</strong><br/><br/>
	   - One week advance notice and 50% deposit are required on each order. For weddings or other large events, please order at least 15 days prior
	   to the event. All deposits are non-refundable.<br/><br/>

	   <strong>Delivery details:</strong><br/> <br/>
		- Delivery is limited and requires advance notice. There is an additional fee for delivery. Most orders will be picked up at our house in Campbell.<br/><br/>

		- Cakes should be kept cool (BUT NOT IN THE FRIDGE) and away from the sun to prevent softening and melting.<br/><br/>

		- We recommend that the cake be placed on a flat surface in your vehicle. Please remember to keep the cake cool in your vehicle as well.<br/><br/>

		- If you are providing your own cake topper, it will need to be brought to us at least 5 days before the pick up date for your cake.<br/><br/>

		- We will make every effort to provide the decoration, size, shape, and colors you request. All our creations are an art and may be subject to slight variations.<br/><br/>

		Thank you for your patronage and for your understanding :)<br/><br/>

		<strong>- Sweet Treats </strong>
		</p>
	</div>

	<div class="orderForm">
		<h3 class ="text-center order-form-head"> To Submit your custom order request, or to obtain a price quote or consultation,
									please complete the form below.</h3>
			<div class="stitchedbox">
				<form id="orderform" method="post" action="order-form-process.php" >

				<div id="leftOrderFormSec">
					<h4>Customer Information:</h4>
					<fieldset>
						<div class="form-group">
							<label class="control-label">Name:</label>
							<input type="numbers" class="form-control" name="SenderPhone" />
						</div>
						<div class="form-group">
							<label class="control-label">Phone Number:</label>
							<input type="numbers" class="form-control" name="Phone" placeholder="(xxx)-xxx-xxxx" />
						</div>
						<div class="form-group">
							<label class="control-label">Email:</label>
							<input type="numbers" class="form-control" name="Email" />
						</div>

							<script type="text/javascript">
								function toggle(className, obj) {
									var $input = $(obj);
									if ($input.prop('checked'))
										$(className).show();
									else
										$(className).hide();
								}
							</script>

							<div class="form-group">
							<input type="checkbox" onclick="toggle('#toggleForm', this)" > Delivery </input>
							<!-- <input type="checkbox" > Pick-Up </input> -->
							</div>
								<div id="toggleForm">
									<label class="control-label">Address:</label>
									<input type="numbers" class="form-control" name="Address" />


									<label class="control-label">City:</label>
									<input type="numbers" class="form-control" name="City" />


									<label class="control-label">State:</label>
									<input type="numbers" class="form-control" name="State" />


									<label class="control-label">Zipcode:</label>
									<input type="numbers" class="form-control" name="Zipcode" />
								</div>

								<div class="form-group">
									<label class="control-label" name="PickUpDelivery">Pick Up / Delivery Date:</label>
									<?php include 'order/calendarPicker.php';?>
							</div>
							<div class="form-group">
								<label class="control-label">Type of Events</label>
								<select class="form-control" name="TypeOfEvents">
									<option value=""> Choose a event</option>
									<option value="baby Shower">Baby Shower</option>
									<option value="kids birthday">Kids Birthday</option>
									<option value="adult birthday">Adult Birthday</option>
									<option value="wedding">Wedding</option>
									<option value="anniversary">Anniversary</option>
									<option value="celebration/holiday">Celebration/ Holidays</option>
									<option value="Others">Others</option>
								</select>
							</div>
							<div class="form-group">
							<label class="control-label" name="Image">Upload Image:</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="500" />
								<input type="file" name="uploadField" />
							</div>
							<div class="form-group">
								<label class="control-label" >Text to be included on the cake:</label>
								<input type="numbers" class="form-control" name="TextOnCake" />
							</div>
				</div>

				<div id="rightOrderFormSec">

					<h4>Orders Information:</h4>
				<script type="text/javascript">
					function showServings(e) {
					var strdisplay = e.options[e.selectedIndex].value;
					if(strdisplay == "Cake") {
						document.getElementById("servingsSection").style.display = "block";
					} else {
						document.getElementById("servingsSection").style.display = "none";
					}
				}
				</script>
				<div class="form-group">
				<label class="control-label">Item:</label>
						<select class="form-control" name="ItemForOrder" onchange="showServings(this)">
							<option value="">Choose an item</option>
							<option value="Cake">Cake</option>
							<option value="Cupcakes">Cupcakes</option>
							<option value="Cakepops">Cakepops</option>
							<option value="Cookies">Cookies</option>
							<option value="Cakepops">Other Treats</option>
						</select>
				</div>
				<div class="form-group">
						<label class="control-label">Quantity:</label>
						<input type="numbers" class="form-control" name="QuantityItems" />
				</div>
						<div id="servingsSection">
							<label class="control-label">Number of servings for cake:</label>
							<input type="numbers" class="form-control" name="NumberOfServings" />
						</div>
						<div class="form-group">
							<label class="control-label">Order Details:</label>
							<!-- <textarea name="Order details" rows="7" cols="5" placeholder="Enter order details(flavor, frosting, filling, size, design, inspiration, theme etc.)">
							</textarea> -->
							<textarea id="orderDetails" name="orderDetails" rows="4" placeholder="Enter order details(flavor, frosting, filling, size, design, inspiration, theme etc.)"></textarea>
						</div>

						<div class="form-group">
							<label class="control-label">Check out with PayPal:
							</label>
							<img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" >
						</div>

						<button type="submit" class="btnSubmit btn-lg pull-right" value="Submit">Submit Request</button>
			  </div>
			</fieldset>
			</form>

		</div>



	</div>
</div>
</div>
<!---- ==================================== footer ===================================================---->
				<div id="footer"><?php include 'footer.php';?></div>
	</div>
			<div class="rightGutter"></div>
			</div>
		<?php include 'index_scripts.php';?>


</body>
</html>
