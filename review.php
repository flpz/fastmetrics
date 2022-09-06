<?php
$fulladdress = $_GET['fulladdress'];
$contactname = $_GET['contactname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$term = $_GET['term'];
$speed = $_GET['speed'];
$phonelines = $_GET['phonelines'];
$wap = $_GET['wap'];
$fax = $_GET['fax'];
$dids = $_GET['dids'];
$tfnumbers = $_GET['tfnumbers'];
$managedrouter = $_GET['managedrouter'];
$dnsfiltering = $_GET['dnsfiltering'];
$dnsfilteringusers = $_GET['dnsfilteringusers'];
$monthlycharges =  $_GET['monthlycharges'];
$onetimecharges =  $_GET['onetimecharges'];

if ($wap == 'no') {
	$onetimecharges = '0.00';
	$wap = 0;
	$wapcost = 0;
	$wapcost = number_format($wapcost, 2);
} else {
	$onetimecharges = $wap*250;
	$onetimecharges = number_format($onetimecharges, 2); 
	$wapcost = $wap*25;
	$wapcost = number_format($wapcost, 2);
}

if ($speed == '50 x 10 Mbps') {
	$speedcost = '179';
} else if ($speed == '25 x 25 Mbps') {
	$speedcost = '199';
} else if ($speed == '50 x 50 Mbps') {
	$speedcost = '229';
} else if ($speed == '100 x 100 Mbps') {
	$speedcost = '279';
} else if ($speed == '300 x 300 Mbps') {
	$speedcost = '399';
} else if ($speed == '500 x 500 Mbps') {
	$speedcost = '399';
} else if ($speed == '1000 x 1000 Mbps') {
	$speedcost = '649';
}
$speedcost = number_format($speedcost, 2);

$phonelinescost = $phonelines*20;
$phonelinescost = number_format($phonelinescost, 2);

if ($fax == 'no') {
	$fax = 0;
	$faxcost = 0;
	$faxcost = number_format($wapcost, 2);
} else {
	$faxcost = $fax*25;
	$faxcost = number_format($faxcost, 2);
}

if ($dids == 'no') {
	$dids = 0;
	$didscost = 0;
	$didscost = number_format($didscost, 2);
} else {
	$didscost = $dids;
	$didscost = number_format($didscost, 2);
}

if ($tfnumbers == 'no') {
	$tfnumbers = 0;
	$tfnumberscost = 0;
	$tfnumberscost = number_format($tfnumberscost, 2);
} else {
	$tfnumberscost = $tfnumbers*15;
	$tfnumberscost = number_format($tfnumberscost, 2);
}

if ($managedrouter == 'no') {
	$managedroutercost = 0;
	$managedroutercost = number_format($managedroutercost, 2);
} else {
	$managedroutercost = 30;
	$managedroutercost = number_format($managedroutercost, 2);
}

if ($dnsfiltering == 'no') {
	$dnsfilteringuserscost = 0;
	$dnsfilteringuserscost = number_format($dnsfilteringuserscost, 2);
} else {
	$dnsfilteringuserscost = $dnsfilteringusers*10;
	$tdnsfilteringuserscost = number_format($dnsfilteringuserscost, 2);
}

$managedrouter = $_GET['managedrouter'];
$dnsfiltering = $_GET['dnsfiltering'];
$dnsfilteringusers = $_GET['dnsfilteringusers'];

$monthlycharges = ($wap*25)+$speedcost+$phonelinescost+$wapcost+$faxcost+$didscost+$tfnumberscost+$managedroutercost+$dnsfilteringuserscost;
$monthlycharges = number_format($monthlycharges, 2); 


if(isset($_POST['submit']) && isset($_POST['recaptcha_response']) ) {
	
	// Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcFZ5cUAAAAAE64MuTNYFEws6Ras2aERyDhdRUp';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
	
	$err = '';
	
	if(strip_tags($_POST['businessname']) == '')  {
		$hasError = true;
	} else {
		$businessname = $_POST['businessname'];
	}
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
	
	if (isset($_POST['samecontact'])) {
		$billingname = $contactname;
		$billingemail = $email;
		$billingphone = $phone;
	} else {
		if(strip_tags($_POST['billingname']) == '')  {
			$hasError = true;
		} else {
			$billingname = $_POST['billingname'];
		}
		if(strip_tags($_POST['billingphone']) == '')  {
			$hasError = true;
		} else {
			$billingphone = $_POST['billingphone'];
		}
		if(strip_tags($_POST['billingemail']) == '')  {
			$hasError = true;
		} else {
			$billingemail = $_POST['billingemail'];
		}
	}
	
	if(!isset($hasError) && $recaptcha->score >= 0.5 ) {
		
		$subject = 'New Order';
		$to = 'sales@fastmetrics.com';
		//$to = 'lopez.florian@live.com.mx';
		$body = "Business name: $businessname \n\n"
			."Contact Name: $contactname  \n\n"
			."Address: $fulladdress \n\n"
			."Speed: $speed \n\n"
			."Managed Router: $managedrouter \n\n"
			."DNS Filtering: $dnsfiltering \n\n"
			."DNS Filtering Users: $dnsfilteringusers \n\n"
			."Email: $email \n\n"
			."Phone: $phone \n\n"
			."Billing Name: $billingname \n\n"
			."Billing Email: $billingemail \n\n"
			."Billing Phone: $billingphone \n\n"
			."Term: $term \n\n"
			."Speed: $speed \n\n"
			."Phone lines: $phonelines \n\n"
			."WAPs: $wap \n\n"
			."Fax lines: $fax \n\n"
			."DIDs: $dids \n\n"
			."Toll-free numbers: $tfnumbers \n\n"
			."Managed Router: $managedrouter \n\n"
			."DNS Filtering Users: $dnsfilteringusers \n\n"
			."Monthly charges: $monthlycharges \n\n"
			."One-time charges: $onetimecharges \n\n";
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
		} else {
			//$emailSent = true;
			$newURL = "https://www.fastmetrics.com/thank-you.php";
			header('Location: '.$newURL.'');
		}
					
	} else {
		$noresult = "Sorry, we've founds errors in your request. Please try again.".$err;
	}
}

$title = "Review Quote";
$desc = "";
$h2 = "Check Availability";
$h1 = "Review Quote";
$share = "";
$chat = "";
$banner = "san-francisco-bay-area-fiber-internet";
$banner_alt = "fiber optic internet service san francisco bay area cover image";
$robots = "noindex,nofollow";
$captcha = "yes";
include("inc/header.php");
?>

<section>
	<article>
		
		<div class="container_fluid">
			<div class="container">
				
				<?php if ( !empty($fulladdress) ) { ?>
					
					<?php if ( !empty($noresult) ) { echo '<p class="noresult"><i class="fa fa-exclamation-triangle"></i>'.$noresult.'</p>'; } ?>
				
					<p><strong>Fastmetrics services are available at this address:</strong></p>
				
					<?php echo '<div class="address"><ul class="fa-ul" style="margin:0;"><li><i class="fa fa-map-marker"></i> <strong>'.$fulladdress.'</strong>  |  <a href="https://www.fastmetrics.com/signup.php">Not your address? Change it.</a></li></ul></div>'; ?>
					
					<div class="divider40"></div>
					<h3>Your Quote</h3>
					
					<div class="row">
						<div class="col-sm-8">
							<table>
								<thead>
									<tr>
										<th>Monthly Charges</th>
										<th>Quantity</th>
										<th>Cost</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $speed; ?> Fiber Internet</td>
										<td>1</td>
										<td>$<?php echo $speedcost; ?></td>
									</tr>
									<tr>
										<td>metricPHONES</td>
										<td><?php echo $phonelines; ?></td>
										<td>$<?php echo $phonelinescost; ?></td>
									</tr>
									<?php if ( $wap != 0 ) { ?>
										<tr>
											<td>Wireless Access Point(s)</td>
											<td><?php echo $wap; ?></td>
											<td>$<?php echo $wapcost; ?></td>
										</tr>
									<?php } ?>
									<?php if ( $fax != 0 ) { ?>
										<tr>
											<td>metricFAX</td>
											<td><?php echo $fax; ?></td>
											<td>$<?php echo $faxcost; ?></td>
										</tr>
									<?php } ?>
									<?php if ( $dids != 0 ) { ?>
										<tr>
											<td>Direct Inward Dialing</td>
											<td><?php echo $dids; ?></td>
											<td>$<?php echo $didscost; ?></td>
										</tr>
									<?php } ?>
									<?php if ( $tfnumbers != 0 ) { ?>
										<tr>
											<td>Toll Free Number(s)</td>
											<td><?php echo $tfnumbers; ?></td>
											<td>$<?php echo $tfnumberscost; ?></td>
										</tr>
									<?php } ?>
									<?php if ( $managedrouter != 0 ) { ?>
										<tr>
											<td>Managed Router</td>
											<td><?php echo $managedrouter; ?></td>
											<td>$<?php echo $managedroutercost; ?></td>
										</tr>
									<?php } ?>
									<?php if ( $dnsfiltering != 'no' ) { ?>
										<tr>
											<td>DNS Filtering</td>
											<td><?php echo $dnsfilteringusers; ?></td>
											<td>$<?php echo $dnsfilteringuserscost; ?></td>
										</tr>
										<tr class="last">
											<td><strong>Total Monthly Charges (<?php echo $term; ?> year(s) term)</strong></td>
											<td></td>
											<td><strong>$<?php echo $monthlycharges; ?></strong></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="divider40"></div>
							
							<?php if ($onetimecharges != '0.00') { ?>
								<table>
									<thead>
										<tr>
											<th>One-time Charges</th>
											<th>Quantity</th>
											<th>Cost</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Wireless Access Point install</td>
											<td><?php echo $wap; ?></td>
											<td>$<?php echo $onetimecharges; ?></td>
										</tr>
										<tr class="last">
											<td><strong>Total One-time Charges</strong></td>
											<td></td>
											<td><strong>$<?php echo $onetimecharges; ?></strong></td>
										</tr>
									</tbody>
								</table>
							<?php } ?>
						</div>
						<div class="col-sm-4">
						
							<div class="blue-bg white select-services">
						
								<h4>Contact & Billing Information</h4>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" id="billingform">
									<input type="hidden" id="fulladdress" name="fulladdress" value="<?php echo $fulladdress; ?>">
									<input type="hidden" id="term" name="term" value="<?php echo $term; ?>">
									<input type="hidden" id="speed" name="speed" value="<?php echo $speed; ?>">
									<input type="hidden" id="phonelines" name="phonelines" value="<?php echo $phonelines; ?>">
									<input type="hidden" id="wap" name="wap" value="<?php echo $wap; ?>">
									<input type="hidden" id="fax" name="fax" value="<?php echo $fax; ?>">
									<input type="hidden" id="dids" name="dids" value="<?php echo $dids; ?>">
									<input type="hidden" id="tfnumbers" name="tfnumbers" value="<?php echo $tfnumbers; ?>">
									<input type="hidden" id="managedrouter" name="managedrouter" value="<?php echo $managedrouter; ?>">
									<input type="hidden" id="dnsfilteringusers" name="dnsfilteringusers" value="<?php echo $dnsfilteringusers; ?>">
									<input type="hidden" id="monthlycharges" name="monthlycharges" value="<?php echo $monthlycharges; ?>">
									<input type="hidden" id="onetimecharges" name="onetimecharges" value="<?php echo $onetimecharges; ?>">
									
									<p><input type="businessname" id="businessname" name="businessname" placeholder="Business Name" class="required"></p>
									<p><input type="contactname" id="contactname" name="contactname" value="<?php echo $contactname; ?>" class="required"></p>
									<p><input value="<?php echo $phone; ?>" type="tel" name="phone" id="phone" class="required"></p>
									<p><input value="<?php echo $email; ?>" type="email" name="email" id="email" class="required email" /></p>
									
									<p><strong>Billing Information</strong></p>
									<p><input type="checkbox" id="samecontact" name="samecontact" value="samecontact" checked> Same as contact</p>
									<div class="billinginfo">
										<p><input type="billingname" id="billingname" name="billingname" placeholder="Billing Name"></p>
										<p><input placeholder="Phone Number" type="tel" name="billingphone" id="billingphone"></p>
										<p><input placeholder="Email" type="email" name="billingemail" id="billingemail" class="email" /></p>
									</div>
									
									<p><input type="hidden" name="recaptcha_response" id="recaptchaResponse"><input type="submit" value="Submit" name="submit" class="submit" /></p>
									
								</form>
							</div>
						</div>
					</div>
					<div class="divider40"></div>
				
				<?php } else { ?>
					<p class="noresult text-center"><i class="fa fa-exclamation-triangle"></i>An error occured... Please try again.</a></p>
				<?php } ?>
				
			</div>
		</div>
		
	</article>
</section>
<?php include("inc/footer.php"); ?>

<style>
.address{padding:20px 30px !important;border:1px solid #ccc;}
.address ul{margin:0;}
label.error{color:#f33;margin-top:10px;}
.noresult{padding:20px 30px !important;color:#fff;background:#f33;}
.noresult a{color:#fff;}
.noresult a:hover{color:#ddd;}
.noresult .fa{margin-right:8px;}
.billinginfo{display:none;}
#billingform input[type=checkbox]{margin:6px 5px 6px 0;}
.select-services{padding:30px 30px 10px;}
.select-services input,.select-services select{background:#fff;color:#888;}
.blue2-bg{background:#638099;}
table td,table th{text-align:right;}
table tr td:first-of-type,table tr th:first-of-type{text-align:left;}

@media screen and (max-width: 992px) {
	table td,table th,table tr td:first-of-type,table tr th:first-of-type{text-align:center;}
}
</style>

</script>
</body>
</html>