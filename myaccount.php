<?php
$title="Fastmetrics Customer Account Log In & Support Ticket Portal";
$desc="Fastmetrics customers can log into their accounts here. Check or upgrade business services, view latest invoices and open support tickets online here.";
$h2="Fastmetrics Business ISP";
$h1="Customer Login & Support Tickets";
$page="account";
$share = "";
$banner="fastmetrics-support";
$banner_alt = 'pink sunset over San Francisco Bay Area looking towards SalesForce Building for SF tech support pages';
$chat = "";
$lazy = "yes";
include("inc/header.php");
?>

<section>
	<article>
	
		<div class="container_fluid text-center" style="padding:40px 0 20px;">
			<div class="container">
				<h3>Fastmetrics Customer Login</h3>
				<p><strong>For Fastmetrics customers only.</strong> After logging in, request new or upgrade existing business services, view invoices online and more.</p>
				<form class="account" method="post" action="https://support.fastmetrics.com/projects/piwi/index.php/dologin">
					<div class="row">
						<div class="col-sm-4">
							<p><input type="text" name="username" placeholder="Username" /></p>
						</div>
						<div class="col-sm-4">
							<p><input type="password" name="password" placeholder="Password" /></p>
						</div>
						<div class="col-sm-4">
							<p><input type="submit" name="dostafflogin" class="submit" value="Login" /></p>
						</div>
					</div>
				</form>
				<p>Need help logging into your Fastmetrics customer account? Contact our <a href="https://www.fastmetrics.com/techsupport.php" title="Local Support Team">Local Support Team</a> for help.</p>
				<p><strong>NEW:</strong> try our <a href="https://www.fastmetrics.com/blog/phone-systems/free-video-chat/">free video chat</a> with your entire team! No sign up needed. Fully encrypted, HD video conferencing made easy. &#128512</p>
			</div>
		</div>
		
		<div class="container_fluid text-center blue-bg white" style="padding:40px 0 20px;">
			<div class="container">
				<h3>Open A Support Ticket</h3>
				<p>Complete the form below to open a ticket with our support team.<br><strong>Note:</strong> you must be an approved technical contact for your account, so we can assist.</p>
				<form class="text-left" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="ticketform">
					<div class="row">
						<div class="col-sm-3">
							<p><input placeholder="Your name" type="text" name="name" id="name" value="" class="required" /></p>
						</div>
						<div class="col-sm-3">
							<p><input placeholder="Company name" type="text" name="company" id="company" value="" class="required" /></p>
						</div>
						<div class="col-sm-3">
							<p><input placeholder="Contact e-mail" type="email" name="email" id="email" value="" class="required email" /></p>
						</div>
						<div class="col-sm-3">
							<p><input placeholder="Contact phone number" type="tel" name="phone" id="phone" value="" class="required" /></p>
						</div>
					</div>
					<p><input placeholder="Subject" type="text" name="subject" id="subject" value="" class="required" /></p>
					<p><textarea name="message" id="message" placeholder="Description of issue or question" class="required"></textarea></p>
					<p style="display:none;"><input placeholder="Country" type="text" name="country" id="country" /></p>
					<div class="row">
						<div class="col-sm-2 offset-sm-5">
							<p class="text-center"><input type="submit" value="Send" name="submit" class="submit" id="contact-form-submit" /></p>
						</div>
					</div>
				</form>
				
				<?php if(isset($_POST['submit']) && isset($_POST['country']) && $_POST['country'] == '') {
					$theerror = '';
						if(strip_tags($_POST['name']) == '') {
						$hasError = true;
						$theerror .= '<li>Name required</li>';
					} else {
						$name = strip_tags($_POST['name']);
					}
					if(strip_tags($_POST['company']) == '') {
						$hasError = true;
						$theerror .= '<li>Company required</li>';
					} else {
						$company = strip_tags($_POST['company']);
					}
					if(strip_tags($_POST['phone']) == '') {
						$hasError = true;
						$theerror .= '<li>Phone required</li>';
					} else {
						$phone = strip_tags($_POST['phone']);
					}
					if(strip_tags($_POST['email']) == '')  {
						$hasError = true;
						$theerror .= '<li>Email required</li>';
					} else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", strip_tags($_POST['email']))) {
						$hasError = true;
						$theerror .= '<li>Invalid email</li>';
					} else {
						$email = strip_tags($_POST['email']);
					}
					if(strip_tags($_POST['subject']) == '') {
						$hasError = true;
						$theerror .= '<li>Subject required</li>';
					} else {
						$subject = strip_tags($_POST['subject']);
					}
					if(strip_tags($_POST['message']) == '') {
						$hasError = true;
						$theerror .= '<li>Message required</li>';
					} else {
						$comments = strip_tags($_POST['message']);
					}
					
					$sent_from = htmlspecialchars($_SERVER['PHP_SELF']);
					if(!isset($hasError)) {
						$subject = 'Support Ticket';
						$to = 'tickets@cgp.fastmetrics.com';
						//$to = 'lopez.florian@live.com.mx';
						$body = "Name: $name \n\n"
							."Company: $company  \n\n"
							."Email: $email \n\n"
							."Phone Number: $phone \n\n"
							."Subject: $subject \n\n"
							."Description: $comments \n\n";
						$from = "$name <support@fastmetrics.com>";

						$headers = array( 'From' => $from,
							'To' => $to,
							'Subject' => $subject
						);

						// SMTP Settings
						require_once "Mail.php";
						
						$host = 'smtp.gmail.com';
						$port = '587';
						$username = 'webticket@fastmetrics.com';
						$password = '#ZF0rYdk$902y7U^';
						
						/*
						$host = 'mail.fastmetrics.com';
						$port = '25';
						$username = 'sales@cgp.fastmetrics.com';
						$password = 'F4st49#778';
						*/
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
							$emailSent = true;
						}
					} else {
						echo '<p style="padding:15px 0;background:#ff3333;">Your form has errors. Please try again.</p>';
					}
				} ?>
				
				<?php if(isset($emailSent) && $emailSent == true) { ?>
					<script type="text/javascript">window.location = "https://www.fastmetrics.com/thank-you-support.php";</script>
				<?php } ?>
				
			</div>
		</div>
		
		<!--<div class="container_fluid text-center mobile-no-top black-bg white desktop-only services">
			<div class="container">	
				<h3 class="text-center">Dedicated Business Services</h3>
				<div class="row">
					<div class="col-sm-3">
						<h4><a class="orange" href="https://www.fastmetrics.com/fiber-optic-internet.php">Fiber Internet Service</a></h4>
						<ul>      				
							<li>○ Managed fiber connectivity</li>
							<li>○ Unlimited bandwidth</li>
							<li>○ Fiber to 10 Gbps symmetric</li>
							<li>○ Free install & setup</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4><a class="orange" href="https://www.fastmetrics.com/ethernet-over-copper.php">EoC Service</a></h4>
						<ul>      				
							<li>○ Faster install time</li>
							<li>○ Upgrade that legacy T1 line</li>
							<li>○ EoC speeds to 30 x 30 Mbps</li>
							<li>○ Free hardware & monitoring</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4><a class="orange" href="https://www.fastmetrics.com/dedicated-ethernet">Dedicated Ethernet</a></h4>
						<ul>      				
							<li>○ Point to point connectivity</li>
							<li>○ Scale your network, faster</li>
							<li>○ Direct cloud connections</li>
							<li>○ Local SF network support</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4><a class="orange" href="https://www.fastmetrics.com/metricvoice">metricVOICE</a></h4>
						<ul>      				
							<li>○ Free calls &amp; texts</li>
							<li>○ Free phones &amp; apps</li>
							<li>○ Add tools, apps &amp; CRMs</li>
							<li>○ Flat service fee - ALL features</li>
						</ul>
					</div>
				</div>
			</div>
		</div>-->
			
	</article>
</section>

<?php include("inc/footer.php"); ?>

</body>
</html>