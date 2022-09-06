<?php
$title="Fastmetrics Customer Account Portal - Log In";
$desc="Fastmetrics Customer account portal. Log in and view or / upgrade your services, see invoices and billing and open support tickets, easily online.";
$h2="Fastmetrics Business ISP";
$h1="Customer Account Login";
$share = "";
$banner="fastmetrics-support";
$banner_alt = 'pink sunset over San Francisco Bay Area looking towards SalesForce Building for SF tech support pages';
$chat = "";
include("inc/header.php");
?>

<section>
	<article>
	
		<div class="container_fluid text-center">
			<div class="container">
				<h3>Fastmetrics Customer Login</h3>
				<p class="login-error">The login failed. Please verify your user name and password.</p>
				<div class="divider20"></div>
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

<style>
.login-error{color:red;}
</style>

</body>
</html>