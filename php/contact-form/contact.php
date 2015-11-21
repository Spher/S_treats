
<!DOCTYPE html>

<html lang="en">
	<head>
		<?php include 'index_headers.php';?>
		<title> Sweet Treats </title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
			$(document).ready(function(){
			(function () {
			$("#ContactMenuHeading").addClass("active");
		})();
	});
	</script>
	</head>
	<body>
		
				

		<div class="myContainer">
					<div class="leftGutter"></div>
					<div class="centralColumn">
						<div id="header"><?php include 'header.php';?></div>
							

<!---- ==================================== Contact Form ===================================================---->
<div id="content" class="content1">
	<div class="container-contact-form">
	
		<h2 class="text-center"> Have a Question? We're here to help!</h2>
		
		<p class="para"> If you have any general questions, including party inquiries or special
		desserts not listed on our website, please complete the form below. For order consultations and 
		quotes, or to place an order, please use our <a class="anchorlink" href="order.php">Order Form</a>. </p>
			 
			 
			<div class="stitched-box">
			 <? echo $confirm;?>
    				 
			
			<form name="contactForm" method="POST" action="contact-form-process.php"  enctype="multipart/form-data">
			
			
					<div class="formFldDiv">
						<label class="contactFormLbl" for="fullname">Full Name:</label>
						<input type="fullname" name="fullname" class="contactFormValue" id="fullname" size="30" >
						<span class="error">*</span>
					</div>
					<div class="formFldDiv">
							<label class="contactFormLbl" for="myEmail">Email Address:</label>
						<input type="text" name="myEmail" class="contactFormValue" id="email" size="30" >
						<span class="error">*</span>
					</div>
	
					<div class="formFldDiv">
						<label class="contactFormLbl" for="tel">Telephone Number:</label>
						<input type="text" id="tel"  name="tel" class="contactFormValue" size="30" >
						<span class="error">*<span>
					</div>
					<div class="formFldDiv">
						<label class="contactFormLbl" for="message">Message:</label>
						<textarea class="contactFormValue" id="message" name="message" type="textarea" cols="35" rows="4">
						</textarea>
						
					</div>
					<div>
					<button type="submit" class="btnSubmit" value="Send Form">Send Message</button>
					
					</div>
				</form>
			</div>
		
		
		
			<div class="contact-us">
				<h3> Contact Us:</h3>
					<br />
				<p> <strong>Email:</strong>  sweettreatssj@gmail.com</p>
				<br />
				<p> <strong>Telephone number:</strong>  (669) 888-6479 </p>
				<br />
				<p> <strong>Location:</strong>  475 Dover Way 
				Campbell, CA 95008 </p>
				<br/>
				<p> <strong>Timings:</strong>  Monday - Sunday  9.00am - 9.00pm</p>
			</div>
		
		</div>
	
			<div class="google-map">
				 <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="1300" 
				 height="400" src="https://maps.google.com/maps?hl=en&q=475 dover way campbell 
				 ca&ie=UTF8&t=terrain&z=16&iwloc=B&output=embed"><div><small>
				 <a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div>
				 <div><small><a href="http://www.premiumlinkgenerator.com/">multihoster premium</a></small>
				 </div>
				 </iframe>
			</div>
</div>
		<div id="footer"><?php include 'footer.php';?></div>
	</div>
		<div class="rightGutter"></div>
	</div>
			<?php include 'index_scripts.php';?>
	</body>
</html>