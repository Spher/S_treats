<?php 

	$fullname = $email = $tel = $message = "";
	$fullnameErr = $emailErr = $telErr = $messageErr = "";
	$failed = false;
	$confirm = "";
	populateForm();
	
	

	//Clean up strings
	
function testInput($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


	
function populateForm() {
//define variables and set to empty values	
global $fullname, $email, $tel, $message, 
	$fullnameErr, $emailErr, $telErr, $messageErr, $failed, $confirm;
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 if (empty($_POST["fullname"])) {
			$fullnameErr = "Full Name is required";
			$failed = true;
		 } else {
			$fullname = testInput($_POST["fullname"]);
			 // check if fullname only contains letters and whitespace
			 if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
			   $fullnameErr = "Only letters and white space allowed"; 
			   $failed = true;
			 }
		   }
		   
		   
   
	if (empty($_POST["email"])) {
			$emailErr = "Email is required";
			$failed = true;
		} else {
			$email = testInput($_POST["email"]);
			// check if e-mail address is well-formed
		if ( filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "";
		} else {
			$emailErr = "Please enter a valid Email ID"; 
			$failed = true;
		}
	}

	//&& strlen($tel) >= 10
	
	if (empty($_POST["tel"])) {
			$telErr = "Telephone number is required";
			$failed = true;
		} else {
			$tel = testInput($_POST["tel"]);
			// check if telephone number contains only numbers
			if( ( preg_match("/[^0-9]/", $tel)) ) {
			echo "";
			}else {
				$telErr = "You forgot to enter your Phone number";
				$failed = true;
			}
		}
	
	
	if (empty($_POST["message"])) {
			$messageErr = "Message is required";
			$failed = true;
		} else {
			$message = testInput($_POST["message"]);
		}
		
		
	if ($failed == "false") {
	   $confirm= "<p>Thank you for sending in your information. 
	   I would love to chat with you and will contact you as soon as possible. Have a good one!</p>";
	   
	$from = "webmaster@tmhardy.com";
	$myemail = "gayatrirnathani@gmail.com";
	
	$mysubject = "Someone has sent you a message";
	
	$mymessage = "
	
	Someone has sent you a message using your contact form:
	
	Name: $fullname
	Email: $email
	Telephone : $tel
	
	Message: 
	$message";
	
	$headers = "From: $from";
	mail($myemail, $mysubject, $mymessage, $headers);
	}
	
}
	
}
	
?>
	<? echo $confirm; ?> 
	
	<?php echo $emailErr;?>
	
	<?php echo $email;?>