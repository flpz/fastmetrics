<?php
$host="localhost";
$username="fastmet_flo";
$password="f4st49@fm";
$databasename="fastmet_s";

$db = new mysqli($host, $username, $password, $databasename);

if(isset($_POST['submit']) && isset($_POST['recaptcha_response']) ) {
	
	// Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcFZ5cUAAAAAE64MuTNYFEws6Ras2aERyDhdRUp';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        // Verified - send email
    } else {
        // Not verified - show form error
    }
	
	
	// Get contact info
	if(strip_tags($_POST['contactname']) == '')  {
		$hasError = true;
	} else {
		$contactname = $_POST['contactname'];
	}
	if(strip_tags($_POST['email']) == '')  {
		$hasError = true;
	} else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", strip_tags($_POST['email']))) {
		$hasError = true;
	} else {
		$email = strip_tags($_POST['email']);
	}
	if(strip_tags($_POST['phone']) == '')  {
		$hasError = true;
	} else {
		$phone = $_POST['phone'];
	}
	
	if(isset($_POST['addresssuggestions'])) {
	
		if(strip_tags($_POST['addresssuggestions']) == '') {
			$hasError = true;
			$theerror .= '<li>Address required</li>';
		} else {
			$address = strip_tags($_POST['addresssuggestions']);
		}
			
		$query = $db->query("SELECT * FROM addresses WHERE address LIKE '".$address."'");
		if($query->num_rows > 0){
			while($row = $query->fetch_assoc()){
				$address = $row['address'];
				$zip = $row['zip'];
				$city = $row['city'];
				$state = $row['state'];
				$newURL = 'https://www.fastmetrics.com/services.php?address='.$address.'&city='.$city.'&state='.$state.'&zip='.$zip.'&contactname='.$contactname.'&email='.$email.'&phone='.$phone.'';
				header('Location: '.$newURL.'');
			}
		}
	
	} else {
					
		if(strip_tags($_POST['zip']) == '')  {
			$hasError = true;
			$theerror .= '<li>ZIP required</li>';
		} elseif( ctype_digit( strip_tags($_POST['zip']) ) ) {
			if ( strlen($_POST['zip']) == 5 ) {
				$zip = strip_tags($_POST['zip']);
			} else {
				$hasError = true;
				$theerror .= '<li>The ZIP should have 5 digits</li>';
			}
		} else {
			$hasError = true;
			$theerror .= '<li>Invalid ZIP</li>';
		}
		if(strip_tags($_POST['address']) == '') {
			$hasError = true;
			$theerror .= '<li>Address required</li>';
		} else {
			$address = strip_tags($_POST['address']);
		}
		if(strip_tags($_POST['business']) == '') {
			$hasError = true;
			$theerror .= '<li>No residential service. Commercial buildings only.</li>';
		}
		
		$fulladdress = $address.', '.$zip;
		
		if(!isset($hasError) && $recaptcha->score >= 0.5 ) {
			
			$subject = 'Check Availability Tool Submission';
			$to = 'sales@fastmetrics.com';
			//$to = 'lopez.florian@live.com.mx';
			$body = "Name: $contactname  \n\n"
				."Address: $fulladdress \n\n"
				."Email: $email \n\n"
				."Phone: $phone \n\n";
			$from = "Fastmetrics Shop <sales@fastmetrics.com>";

			$headers = array( 'From' => $from,
				'To' => $to,
				'Subject' => $subject
			);

			// SMTP Settings
			require_once "Mail.php";
			$host = 'mail.fastmetrics.com';
			$port = '587';
			$username = 'sales@fastmetrics.com';
			$password = 'F4st49#778';
			$smtp = Mail::factory('smtp',
				array ('host' => $host,
					'port' => $port,
					'auth' => true,
					'username' => $username,
					'password' => $password));

			$mail = $smtp->send($to, $headers, $body);

			if (PEAR::isError($mail)) {
				echo $mail->getMessage();
			}
		
			$query_p = $db->query("SELECT * FROM postcodes WHERE Postcodes LIKE '".$zip."'");
			if($query_p->num_rows > 0){
				
				// Perfect Match
				$query = $db->query("SELECT * FROM addresses WHERE address LIKE '".$address."' AND zip = '".$zip."'");
				
				if($query->num_rows > 0){
					while($row = $query->fetch_assoc()){
						$address = $row['address'];
						$zip = $row['zip'];
						$city = $row['city'];
						$state = $row['state'];
						$newURL = 'https://www.fastmetrics.com/services.php?address='.$address.'&city='.$city.'&state='.$state.'&zip='.$zip.'&contactname='.$contactname.'&email='.$email.'&phone='.$phone.'';
						header('Location: '.$newURL.'');
					}
				} else {
					// Suggestions
					$suggestions = '';
					$query_s = $db->query("SELECT * FROM addresses WHERE address LIKE '%".$address."%' AND zip = '".$zip."'");
					if($query_s->num_rows > 0){
						while($row = $query_s->fetch_assoc()){
							$address = $row['address'];
							$zip = $row['zip'];
							$city = $row['city'];
							$state = $row['state'];
							
							$suggestions .= '<input type="radio" name="addresssuggestions" value="'.$address.'" class="required"><label>'.$address.', '.$city.', '.$state.' '.$zip.'</label><br>';
						}
					} else {
						$noresult = 'Your address does not qualify for online ordering at this time. Contact our sales team to find about further solutions.';
					}
				}
			} else {
				$noresult = 'Your address does not qualify for online ordering at this time. Contact our sales team to find about further solutions.';
			}
		} else {
			$errors = "Sorry, we've founds errors in your request. Please try again.";
		}
	}
}

$title = "Check for Fiber Internet and Cloud Phone Systems Availability";
$desc = "";
$h2 = "Check Availability";
$h1 = "Enter your full business address";
$share = "";
$chat = "yes";
$banner = "san-francisco-bay-area-fiber-internet";
$banner_alt = "fiber optic internet service san francisco bay area cover image";
$page = "signup";
$robots = "noindex,nofollow";
$captcha = "yes";
include("inc/header.php");
?>

<section>
	<article>
		
		<div class="container_fluid">
			<div class="container">
				
				<?php if ( !empty($suggestions) ) { ?>
					<p>Please select your address below or <a href="mailto:sales@fastmetrics.com">contact us</a>.</p>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="ui-widget" id="signupformsuggestions">
						<p><?php echo $suggestions; ?></p>
						<p><input type="submit" value="Continue to services" name="submit" class="submit" /></p>
						<input type="hidden" id="contactname" name="contactname" value="<?php echo $contactname; ?>">
						<input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
						<input type="hidden" id="phone" name="phone" value="<?php echo $phone; ?>">
					</form>
				<?php } else { ?>
					<h3 class="text-center">Check Availability</h3>
					<?php if ( !empty($error) ) {
						echo '<p class="noresult text-center"><i class="fa fa-exclamation-triangle"></i>'.$error.'</p>';
					} else if ( !empty($noresult) ) {
						echo '<p class="noresult text-center"><i class="fa fa-times-circle"></i>'.$noresult.'</p>'; ?>
						
						<div class="divider20"></div>
						<h4 class="text-center">Contact Sales Team</h4>
						
						<div class="row text-center">
							<div class="col-sm-3 col-sm-offset-3">
								<div class="blue-bg white" style="padding:30px 30px 10px;">
									<p><img src="https://www.fastmetrics.com/assets/images/email-icon.png" alt="email sales team"></p>
									<p><a href="mailto:sales@fastmetrics.com" class="white"><strong>sales@fastmetrics.com</strong></a></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="turquoise-bg white" style="padding:30px 30px 10px;">
									<p><img src="https://www.fastmetrics.com/assets/images/phone-icon.png" alt="call sales team"></p>
									<p><a href="tel:1-800-724-7100" class="white"><strong>1-800-724-7100</strong></a></p>
								</div>
							</div>
						</div>
						<div class="divider20"></div>
						
					<?php } else { ?>					
						<p class="tip text-center"><i class="fa fa-lightbulb-o"></i>When entering your address please use full names and numerals (i.e. 720 Market Street) and do not use punctuation.</p>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="ui-widget" id="signupform">
							<div class="row">
								<div class="col-sm-4"><p><input type="contactname" id="contactname" name="contactname" placeholder="Name" class="required"></p></div>
								<div class="col-sm-4"><p><input placeholder="Phone Number" type="tel" name="phone" id="phone" class="required"></p></div>
								<div class="col-sm-4"><p><input placeholder="Email" type="email" name="email" id="email" class="required email" /></p></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><p><input type="text" id="zip" name="zip" placeholder="ZIP Code" class="required"></p></div>
								<div class="col-sm-4"><p><input type="text" id="address" name="address" placeholder="Enter your address" class="required"></p></div>
								<div class="col-sm-4"><p class="signup-check"><strong>This is a business address</strong> <input type="checkbox" id="business" name="business" class="required" checked></p></div>
							</div>
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4"><p><input type="hidden" name="recaptcha_response" id="recaptchaResponse"><input type="submit" value="Check Availability" name="submit" class="submit" /></p></div>
							</div>
						</form>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		
	</article>
</section>
<?php include("inc/footer.php"); ?>

<link href="https://www.fastmetrics.com/assets/css/jquery-ui.min.css" rel="stylesheet" >

<style>
.signup-check {margin:0;padding:10px 0 !important;}
.signup-check input{float:left;margin-top:6px;}
.signup-check input[type=checkbox]{margin:6px 5px 6px 0;}
.noresult{padding:20px 30px !important;color:#fff;background:#f33;}
.noresult a{color:#fff;}
.noresult a:hover{color:#ddd;}
.tip{padding:20px 30px !important;color:#fff;background:#77c9c7;}
.tip .fa,.noresult .fa{margin-right:8px;}
label.error{color:#f33;margin-top:10px;}
</style>

</script>
</body>
</html>