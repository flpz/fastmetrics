<?php
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$contactname = $_GET['contactname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$fulladdress = $address.', '.$city.', '.$state.' '.$zip;
	
if(isset($_POST['submit'])) {

	if(strip_tags($_POST['term']) == '')  {
		$hasError = true;
	} else {
		$term = $_POST['term'];
	}
	
	if(strip_tags($_POST['speed']) == '')  {
		$hasError = true;
	} else {
		$speed = $_POST['speed'];
	}
	
	if(strip_tags($_POST['phonelines']) == '')  {
		$hasError = true;
	} else {
		$phonelines = $_POST['phonelines'];
	}
	
	if(strip_tags($_POST['wap']) == '')  {
		$wap =  'no';
	} else {
		$wap =  $_POST['wap'];
	}
	
	if(strip_tags($_POST['fax']) == '')  {
		$fax =  'no';
	} else {
		$fax =  $_POST['fax'];
	}
	
	if(strip_tags($_POST['dids']) == '')  {
		$dids =  'no';
	} else {
		$dids =  $_POST['dids'];
	}
	
	if(strip_tags($_POST['tfnumbers']) == '')  {
		$tfnumbers =  'no';
	} else {
		$tfnumbers =  $_POST['tfnumbers'];
	}
	
	if(strip_tags($_POST['managedrouter']) == '')  {
		$managedrouter =  'no';
	} else {
		$managedrouter =  $_POST['managedrouter'];
	}
	
	if(strip_tags($_POST['dnsfiltering']) != '') {
		if(strip_tags($_POST['dnsfiltering']) != '' && ($_POST['dnsfilteringusers']) == '')  {
			$hasError = true;
		} else {
			$dnsfiltering =  'yes';
			$dnsfilteringusers =  $_POST['dnsfilteringusers'];
		}
	} else {
		$dnsfiltering =  'no';
		$dnsfilteringusers =  'no';
	}

	if(!isset($hasError)) {
		$newURL = 'https://www.fastmetrics.com/review.php?fulladdress='.$fulladdress.'&contactname='.$contactname.'&email='.$email.'&phone='.$phone.'&term='.$term.'&speed='.$speed.'&phonelines='.$phonelines.'&wap='.$wap.'&fax='.$fax.'&dids='.$dids.'&tfnumbers='.$tfnumbers.'&managedrouter='.$managedrouter.'&dnsfiltering='.$dnsfiltering.'&dnsfilteringusers='.$dnsfilteringusers.'';
		header('Location: '.$newURL.'');
						
	} else {
		$noresult = "Sorry, we've founds errors in your request. Please try again.";
	}

}

$title = "Select Business Services";
$desc = "";
$h2 = "Check Availability";
$h1 = "Select Business Services";
$share = "";
$chat = "yes";
$banner = "san-francisco-bay-area-fiber-internet";
$banner_alt = "fiber optic internet service san francisco bay area cover image";
$robots = "noindex,nofollow";
include("inc/header.php");
?>

<section>
	<article>
		
		<div class="container_fluid">
			<div class="container">
			
				<?php if ( !empty($address) ) {
					
					if ( !empty($noresult) ) { echo '<p class="noresult"><i class="fa fa-exclamation-triangle"></i>'.$noresult.'</p>'; } ?>
					
					<p><strong>Fastmetrics services are available at this address:</strong></p>
				
					<?php echo '<div class="address"><ul class="fa-ul" style="margin:0;"><li><i class="fa fa-map-marker"></i> <strong>'.$address.', '.$city.', '.$state.' '.$zip.'</strong>  |  <a href="https://www.fastmetrics.com/signup.php">Not your address? Change it.</a></li></ul></div>'; ?>
				
					
					<div class="divider40"></div>
					<h3 class="text-center">Choose Services</h3>
					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" id="servicesform">
						
						<input type="hidden" id="fulladdress" name="fulladdress" value="<?php echo $fulladdress; ?>">
						<input type="hidden" id="contactname" name="contactname" value="<?php echo $contactname; ?>">
						<input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
						<input type="hidden" id="phone" name="phone" value="<?php echo $phone; ?>">
						
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								<p><select name="term" id="term" class="required">
									<option value="">Select a term</option>
									<option value="1">1 Year</option>
									<option value="2">2 Years</option>
									<option value="3">3 Years</option>
								</select></p>
							</div>
						</div>
						<div class="divider20"></div>
						
						<div class="services">
							<div class="select-services blue-bg white">
								<div class="row">
									<div class="col-md-2 text-center desktop-only">
										<img src="https://www.fastmetrics.com/assets/images/internet-speeds.png">
									</div>
									<div class="col-md-10 speeds">
										<h3>Internet Speed</h3>
										<ul style="margin:0 0 5px;">
											<li>
												<input type="radio" name="speed" value="50 x 10 Mbps"  id="speed1">
												<label for="speed1"><em>50 x 10 Mbps</em><br><span><strong>$179</strong>/Mo</span></label>
											</li>
											<li>
												<input type="radio" name="speed" value="50 x 10 Mbps" id="speed2" checked>
												<label for="speed2"><em>25 x 25 Mbps</em><br><span><strong>$199</strong>/Mo</span></label>
											</li>
											<li>
												<input type="radio" name="speed" value="50 x 50 Mbps" id="speed3">
												<label for="speed3"><em>50 x 50 Mbps</em><br><span><strong>$229</strong>/Mo</span></label>
											</li>
											<li>
												<input type="radio" name="speed" value="100 x 100 Mbps" id="speed4">
												<label for="speed4"><em>100 x 100 Mbps</em><br><span><strong>$279</strong>/Mo</span></label>
											</li>
											<li>
												<input type="radio" name="speed" value="300 x 300 Mbps" id="speed5">
												<label for="speed5"><em>300 x 300 Mbps</em><br><span><strong>$399</strong>/Mo</span></label>
											</li>
											<li>
												<input type="radio" name="speed" value="500 x 500 Mbps" id="speed6">
												<label for="speed6"><em>500 x 500 Mbps</em><br><span><strong>$399</strong>/Mo</span></label>
											</li>
											<li>
												<input type="radio" name="speed" value="1000 x 1000 Mbps" id="speed7">
												<label for="speed7"><em>1000 x 1000 Mbps</em><br><span><strong>$649</strong>/Mo</span></label>
											</li>
										</ul>
										<p><em style="color:#ddd;">*Free setup on a 1, 2 and 3 year terms.</em></p>
									</div>
								</div>
							</div>
							<div class="divider20"></div>
							
							<div class="select-services blue2-bg white">
								<div class="row">
									<div class="col-md-2 desktop-only text-center">
										<img src="https://www.fastmetrics.com/assets/images/phone-lines.png">
									</div>
									<div class="col-md-10">
										<h3>metricPHONES</h3>
										<p><strong style="font-size:18px;color:#77c9c7;">$20</strong>/Mo per line<br>
										<em style="color:#ddd;">*33% discount with online order.</em></p>
										<div class="row">
											<div class="col-md-6">
												<p><select name="phonelines" id="phonelines" class="required">
													<option value="">Select number of phone lines</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
													<option value="32">32</option>
													<option value="33">33</option>
													<option value="34">34</option>
													<option value="35">35</option>
													<option value="36">36</option>
													<option value="37">37</option>
													<option value="38">38</option>
													<option value="39">39</option>
													<option value="40">40</option>
													<option value="41">41</option>
													<option value="42">42</option>
													<option value="43">43</option>
													<option value="44">44</option>
													<option value="45">45</option>
													<option value="46">46</option>
													<option value="47">47</option>
													<option value="48">48</option>
													<option value="49">49</option>
													<option value="50">50</option>
												</select></p>
											</div>
										</div>
										<ul>
											<li>Free Yealink SIP T22 phones with any sign up. <a href="https://www.fastmetrics.com/docs/Yealink-SIP-T22P-Datasheet.pdf" target="_blank" class="white">See datasheet</a>.</li>
											<li class="dect">Free Yealink DECT phones. No wiring required - wireless IP phones.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="divider20"></div>
							
							<div class="select-services blue-bg white">
								<div class="row">
									<div class="col-md-2 desktop-only text-center">
										<img src="https://www.fastmetrics.com/assets/images/options.png">
									</div>
									<div class="col-md-10">
										<h3>Optional Services</h3>
										<div class="row">
											<div class="col-sm-6">
												<h4 style="margin:0;"><i class="fa fa-wifi"></i>&nbsp;&nbsp;Managed WiFi</h4>
												<p><strong style="font-size:18px;color:#77c9c7;">$25</strong>/Mo per Wireless Access Point + $250/WAP install</p>
												<p style="margin:0 0 10px;"><select name="wap" id="wap">
													<option value="">Select number of WAPs</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select></p>
												<p><em style="color:#ddd;">*Includes managed router / firewall.</em></p>
											</div>
											<div class="col-sm-6">
												<h4 style="margin:0;"><i class="fa fa-fax"></i>&nbsp;&nbsp;metricFAX</h4>
												<p><strong style="font-size:18px;color:#77c9c7;">$25</strong>/Mo per line</p>
												<p><select name="fax" id="fax">
													<option value="">Select number of fax lines</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select></p>
											</div>
										</div>
										<div class="divider20"></div>
										
										<div class="row">
											<div class="col-sm-6">
												<h4 style="margin:0;"><i class="fa fa-arrow-down"></i>&nbsp;&nbsp;DIDs (Direct Inward Dialing)</h4>
												<p><strong style="font-size:18px;color:#77c9c7;">$1</strong>/Mo per item</p>
												<p><select name="dids" id="dids">
													<option value="">Select number of DIDs</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
													<option value="32">32</option>
													<option value="33">33</option>
													<option value="34">34</option>
													<option value="35">35</option>
													<option value="36">36</option>
													<option value="37">37</option>
													<option value="38">38</option>
													<option value="39">39</option>
													<option value="40">40</option>
													<option value="41">41</option>
													<option value="42">42</option>
													<option value="43">43</option>
													<option value="44">44</option>
													<option value="45">45</option>
													<option value="46">46</option>
													<option value="47">47</option>
													<option value="48">48</option>
													<option value="49">49</option>
													<option value="50">50</option>
												</select></p>
											</div>
											<div class="col-sm-6">
												<h4 style="margin:0;"><i class="fa fa-phone"></i>&nbsp;&nbsp;Toll free numbers</h4>
												<p><strong style="font-size:18px;color:#77c9c7;">$15</strong>/Mo per number</p>
												<p><select name="tfnumbers" id="tfnumbers">
													<option value="">Select number of toll free numbers</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
												</select></p>
											</div>
										</div>
										<div class="divider20"></div>
										
										<div class="row">
											<div class="col-sm-6">
												<div class="managedrouter">
													<input type="checkbox" id="managedrouter" name="managedrouter" value="Managed Router"> <h4 style="margin:0;display:inline-block;">Managed Router/firewall</h4>
													<br><strong style="font-size:18px;color:#77c9c7;">$30</strong>/Mo
													<p></p>
												</div>
											</div>
											<div class="col-sm-6">
												<input type="checkbox" id="dnsfiltering" name="dnsfiltering" value="DNS Filtering"> <h4 style="margin:0;display:inline-block;">DNS Filtering</h4>
												<br><strong style="font-size:18px;color:#77c9c7;">$XX</strong>/Mo per user
												<p></p>
												<div class="dnsfilteringusers">
													<p><select name="dnsfilteringusers" id="dnsfilteringusers">
														<option value="">Select number of users</option>
														<option value="5">5 users</option>
														<option value="10">10 users</option>
														<option value="20">20 users</option>
														<option value="50">50 users</option>
														<option value="100">100 users</option>
														<option value="250">250 users</option>
														<option value="500">500 users</option>
														<option value="1000">1000 users</option>
														<option value="2000">2000 users</option>
													</select></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="divider20"></div>
							
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4">
									<p><input type="submit" value="Review Quote" name="submit" class="submit" /></p>
								</div>
							</div>
						</div>
					</form>
					
				<?php } else { ?>
					<p class="noresult text-center"><i class="fa fa-exclamation-triangle"></i>An error occured... Please try again.</a></p>
				<?php } ?>
				
			</div>
		</div>
		
	</article>
</section>
<?php include("inc/footer.php"); ?>

<style>
.address{padding:20px 30px !important;border:1px solid #ccc;background:#f8f8f8;}
.address ul{margin:0;}
label.error{color:#f33;margin-top:10px;}
.dnsfilteringusers{display:none;}
.noresult{padding:20px 30px !important;color:#fff;background:#f33;}
.noresult a{color:#fff;}
.noresult a:hover{color:#ddd;}
.noresult .fa{margin-right:8px;}
.dect{display:none;}
.select-services{padding:30px 30px 10px;}
.services{display:none;}
.speeds li{display:inline-block;margin-right:2% !important;list-style:none;padding:0;position:relative;width:22%;height:80px;text-align:center;font-size:13px;}
.speeds li:before{display:none;}
.speeds label,.speeds input{ display:block;position:absolute;top:0;left:0;right:0;bottom:0;}
.speeds input[type="radio"]{opacity:0.011;z-index:7;margin:0;width:100%;height:100%;cursor:pointer;}
.speeds input[type="radio"]:checked + label {background:#77c9c7;border:1px solid #77c9c7}
.speeds label{padding:12px 5px;border:1px solid #fff; cursor:pointer;z-index:6;font-weight:400;}
.speeds label span strong{font-size:20px;line-height:1.2;}
.speeds li:hover label{background:rgba(255,255,255,.1);}
.select-services input,.select-services select{background:#fff;color:#888;}
.blue2-bg{background:#638099;}
.blue3-bg{background:#7492ad;}

@media screen and (max-width:767px) {
	.speeds li{margin-right:0 !important;width:100%;}
}
</style>

</script>
</body>
</html>