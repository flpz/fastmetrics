<?php
$title="Cloud Phone User Interface Overview - Fastmetrics";
$desc="Watch this video from our voice team. It's easy to manage business phone service from the cloud. Upgrade to feature rich cloud hosted phones today.";
$h2="Cloud Phone User Videos";
$h1="Cloud Phone User Interface Overview";
$share = "";
$banner="clouds";
$canonical="https://www.fastmetrics.com/metricvoice";
$chat = "yes";
include("inc/header.php");
?>

<section>
	<article>
	
		<div class="container_fluid">
			<div class="container">
				<h3 class="text-center">Cloud Phone User Interface Overview</span></h3>
				<p class="text-center">Watch this short video from our voice technician Matt. See how easy it is to manage your <a href="https://www.fastmetrics.com/metricvoice">business phone service</a> from the cloud.</p>
				<p class="text-center"><a class="btn" data-toggle="modal" data-target="#contact">Contact Us</a></p>
				<div class="divider20"></div>
				<div class="text-center" itemscope itemtype="http://schema.org/VideoObject">
					<meta itemprop="name" content="Choose from our huge range of business phone features" />
					<meta itemprop="duration" content="PT3M43S" />
					<meta itemprop="description" content="Manage your business phone service online" />
					<meta itemprop="thumbnailUrl" content="https://www.fastmetrics.com/images/videos/cloud-based-portal.png" />
					<meta itemprop="contentURL" content="https://www.fastmetrics.com/videos/cloudbasedportal.mp4" />
					<meta itemprop="uploadDate" content="2013-11-18T14:00:00+08:00" />
				   <video width="1024" height="568" controls="controls" id="cloud-portal">
						<source src="https://www.fastmetrics.com/videos/cloudbasedportal.mp4" type="video/mp4" />
						<source src="https://www.fastmetrics.com/videos/cloudbasedportal.webm" type="video/webm" />
						<source src="https://www.fastmetrics.com/videos/cloudbasedportal.ogv" type="video/ogg" />
						<object type="application/x-shockwave-flash" data="https://www.fastmetrics.com/videos/player.swf" width="1024" height="568">
							<param name="movie" value="https://www.fastmetrics.com/videos/player.swf" />
							<param name="allowFullScreen" value="true" />
							<param name="FlashVars" value="flv=https://www.fastmetrics.com/videos/cloudbasedportal.flv" />
							Choose from our huge range of business phone features
						</object>
					</video>
				</div>
				<div class="divider40"></div>
				<p><strong>Video Transcript</strong></p>
				<p>Hi guys. This is Matt from Fastmetrics here to give you an overview of the user level web portal for the Fastmetrics metricPHONE <a href="https://www.fastmetrics.com/metricvoice" title="hosted PBX system">hosted PBX system</a>.</p>
				<p>Here we are at the URL, <a href="https://nms.vofm.us/portal/" rel="noffolow" target="_blank">nms.vofm.us/portal/</a>. I’m going to log into extension 100 here at demo.fastmetrics.com.</p>
				<p>Logging in, we see the home screen. Here we see any new messages, the recent call history, the active answering rule and any phones that are currently registered to my extension.</p>
				<p>Moving over to the Messages tab, we can see the number of new messages we have. We click on it. We will also see those messages. We can listen to it from the browser here. Download it to our computer. Save it to the server. We mark it as red or delete it. We can check on the saved messages and recently deleted messages from this drop down. Currently we don’t have any.</p>
				<p>We can also change these settings for the voicemail, such as reading off the time that the voicemail was received, the incoming caller ID. We can manage multiple different types of voicemail greetings if you want to have custom ones for a vacation or certain times of the year. You can also send your <a href="https://www.fastmetrics.com/support/cloud-phone-service-check-voicemail/" title="voicemails">voicemails</a> to email as a link or as an attachment.</p>
				<p>The next thing to look at here are answering rules and <a href="https://www.fastmetrics.com/support/cloud-phone-service-time-frames/" title="time frames">time frames</a>. First we’re going to take a look at time frames. Let’s say we want to change our extension to forward the voicemail all the time on Saturdays and Sundays. We’re going to go ahead and add a time frame, select certain days of the week and times. Select Sunday and move our slider to have all the days selected. We will name this “Weekend”.</p>
				<p>Come back over to <a href="https://www.fastmetrics.com/cloud-pbx-features-answering-rules.php" title="Answering Rules">Answering Rules</a>. Add a rule. Select our weekend time frame here and click Do Not Disturb to have it sent directly to voicemail.</p>
				<p>Once we save that, we just want to make sure it’s the top rule because it’s going to check the top one first and go through the rules in order. Once we click Save, now all of our Saturday and Sunday <a href="https://www.fastmetrics.com/support/transferring-directly-voicemail/" title="transferring directly voicemail">calls will go directly to voicemail</a>.</p>
				<p>You can do that in a number of different ways and it also accepts dates too if you know you’re going to be on vacation from a certain day to a certain day. You can set up rules for that too.</p>
				<p>The next tab here is the Contacts tab. This will list every user in your organization or every extension. When you see a green icon here, it means that their phone is registered and that they are not on the phone and all of these links are click-to-dial.</p>
				<p>Finally we have the call history. This will be a comprehensive <a href="https://www.fastmetrics.com/support/cloud-phones-call-history/" title="call history">call history for your extension</a>. So incoming, outgoing and missed calls are all available here and you can set filters to get the data that you want. You can also export these to CSV for data crunching on your own time.</p>
				<p>Finally we have the profile link in the upper right here. You can edit your name, your time zone that you’re in, add an email address. This is for the voicemail, the email system. You can also edit your area code, the caller ID and update your password from this interface.</p>
				<p>So that’s the user level interface for the metricPHONE System.</p>
				<p>Thank you very much.</p>
				<script>
					document.addEventListener('DOMContentLoaded', init, false)
					var videoId = document.getElementById('cloud-portal')
					var videoTitle = 'Cloud Phone User Interface Overview'
					function init () {
						videoId.addEventListener('play', videoPlay, false)
						videoId.addEventListener('pause', videoPause, false)
						videoId.addEventListener('ended', videoEnd, false)
					}
					function videoPlay () {
						ga('send', 'event', 'video', 'video played', videoTitle)
						setKeyFrames(this.duration)
					}
					function videoPause () {
						ga('send', 'event', 'video', 'video paused', videoTitle)
					}
					function videoEnd () {
						ga('send', 'event', 'video', '100% video played', videoTitle)
					}
				</script>
			</div>
		</div>
		
	</article>
</section>		
		
<?php include("inc/footer.php"); ?>

</body>
</html>