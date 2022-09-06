<?php
$title="Cloud PBX Features - How To Set Up Call Queues Video - Fastmetrics";
$desc="Our cloud PBX empowers Administrators to set up phone systems from a desktop. This video shows how to set up call queues for different office numbers.";
$h2="Cloud PBX Phone Features";
$h1="How To Set Up Call Queues In The Cloud";
$banner="phone";
$share = "";
$canonical="https://www.fastmetrics.com/cloud-phone-service-features.php";
$chat = "yes";
include("inc/header.php");
?>

<section>
	<article>
	
		<div class="container_fluid">
			<div class="container">	
				<h3 class="text-center">Flexible PBX Features From The Cloud</h3>
				<p>Our cloud PBX features make business phone service more efficient. Watch how easy it is for Administrators or IT Staff to set up linear call queues for inbound calls, online from any desktop or via the <a href="https://www.fastmetrics.com/fastmetrics-mobile-cloud-phone-app">Fastmetrics mobile cloud app</a>.</p>
  				<p>An example of a linear call queue might be when an inbound call is directed to a Sales Team Member. If this Team Member is not available, the call is forwarded onto your Office Manager, after a designated number of rings. Full transcript of the video below.</p>
				<div class="divider20"></div>
				<div class="text-center" itemscope itemtype="http://schema.org/VideoObject">
					<meta itemprop="name" content="How To Set Up Call Queues In The Cloud" />
					<meta itemprop="description" content="An example of a linear call queue might be when an inbound call is directed to a Sales Team Member. If this Team Member is not available, the call is forwarded onto your Office Manager, after a designated number of rings. Full transcript of the video below." />
					<meta itemprop="duration" content="PT14M19S" />
					<meta itemprop="thumbnailUrl" content="images/videos/cloud-pbx-features-admin-queues.png" />
					<meta itemprop="contentURL" content="https://www.fastmetrics.com/videos/cloud-pbx-features-admin-queues.mp4" />
					<meta itemprop="uploadDate" content="2014-02-20T14:00:00+08:00" />
				   <video width="520" height="292" controls="controls">
						<source src="https://www.fastmetrics.com/videos/cloud-pbx-features-admin-queues.mp4" type="video/mp4" />
						<source src="https://www.fastmetrics.com/videos/cloud-pbx-features-admin-queues.webm" type="video/webm" />
						<source src="https://www.fastmetrics.com/videos/cloud-pbx-features-admin-queues.ogv" type="video/ogg" />
						<object type="application/x-shockwave-flash" data="https://www.fastmetrics.com/videos/player.swf" width="520" height="288">
							<param name="movie" value="https://www.fastmetrics.com/videos/player.swf" />
							<param name="allowFullScreen" value="true" />
							<param name="FlashVars" value="flv=https://www.fastmetrics.com/videos/cloud-pbx-features-admin-queues.flv" />
							How To Set Up Call Queues In The Cloud
						</object>
					</video>
				</div>
				<div class="divider40"></div>
				<p>Hey guys, this is Matt at Fastmetrics, bringing you a video of the <a href="cloud-based-pbx-service.php" title="metricPHONE system" class="orange_link">metricPHONE web interface</a>. Today, we're going to be going over linear queues.</p> 
				<p>So here's a domain I have set up. We have 4 different users. Agent Matt, Agent John and Manager Beth.</p> 
				<p>So what we're going to do is we're going to do is set up a queue that hunts through the users in this order. So we want it to ring Matt first, John and then Beth.</p>
				<p>So every call that comes in, it's going to try and ring in this order. So each one, will come into the first one, ring for a certain amount of time, time out, ring for the second one, ring for a certain amount of time, time out and third and so on until we've reached a certain time out.</p>
				<p>So let's go ahead and get started. We're going to click on call queues, add call queue. The name is a descriptive name, so we'll say, Sales Queue and give it an extension 900 and we're going to select linear for type.</p>
				<p>So, some initial values here. The Agent ring time out is the amount of time we spend ringing each individual person before going to the next step. So by default, it says 10 seconds. So it's going to ring Matt for 10 seconds, when it's done doing that, it's going to stop ringing Matt and ring John for 10 seconds and keep going down your list.</p> 
				<p>We're going to set that to 5 for now and let's leave everything else to the defaults for now. So click add and I already had these set up so go ahead and remove them so we can add them again.</p> 
				<p>So, we have a blank queue we're going to go ahead and add somebody. Just type in the extension. We'll say, Agent Matt. We want to set them to online. The wrap up time is the amount of time before somebody gets re entered as available. So if you're on a phone call and that phone call ended, you have the wrap up time in seconds until you're eligible to receive another call. So that time is usually used to enter information into your CRM like salesforce.</p>
				<p>Make simultaneous calls - usually you're going to have this set to 1. You can set it to as many calls as you want to send down to that person, it's just going to show more calls coming in on their actual phone, versus say, you want to focus on a single call.</p> 
				<p>Order in the linear hunt - so the order that we're looking at is literally their position in the queue. So this is the 1st user so we're going to have it on 1.</p>
				<p>Queue priority for agent - we're not going to worry about. And we can usually leave those unchecked too and click save. So now it's just repeat for the other 2 users. Online, no wrap up time, this user's 2nd in line. And 200 and this user's 3rd in line.</p> 
				<p>Ok. So, from this screen we can see that all these icons are green which means available and online. If I dial between the 2 of them, so now I've made call between these 2 people and now they appear on a call. And, if I unplugged one of these phones, it will turn grey. And that means that the phone is either off, or they're logged out of the queue. So, that's all there is to actually setting up a queue.</p>
				<p>The other thing we're going to check out really quick before we go ahead and make a test call in, is check out the user I made, when we added that queue. So I've created a user on extension 900, called Sales queue, which is the name that we entered in. If we go there and click on Answering rules, we'll see that any call that comes into extension 900 is automatically forwarded to a queue of the same name, 900.</p> 
				<p>The important thing here is, is this field, the ring for X seconds. This is the absolute max amount of time, that a person can sit in that queue. So if you set this to 30 seconds, at 30 seconds they are going to be offered a chance to leave the queue and leave a <a href="https://www.fastmetrics.com/support/cloud-phone-service-check-voicemail/" target="_blank" class="orange_link" title="voicemail">voicemail</a>, or get re-queued. So let me go ahead and set this down to 10 and then we'll make a quick call in and you guys can hear it.</p> 
				<p>So right now, the 1st person is ringing and then it'll switch over to the 2nd person. Auto attendant: PRESS 2 TO LEAVE A VOICE MAIL. PRESS ANY OTHER KEY TO RETURN TO THE QUEUE. OR YOU MAY HANG UP AT ANY TIME.</p> 
				<p>And if you don't press anything, it's just going to re-queue as if you pressed any button. So that's the very basics of it. Alternatively, we can force someone out of the queue, so they aren't just sitting there going through that repeating, over and over again. To do that, we would edit the default answering rule here and set the When unanswered rule here to send it to <a href="https://www.fastmetrics.com/support/cloud-phone-service-check-voicemail/" target="_blank" class="orange_link" title="voice mail">voice mail</a> or another telephone number, or an extension.</p> 
				<p>So if we want to send it to the voice mail of the extension 900 here, we would just click save there and now if we dial in it's going to ring our guys for 10 seconds and then go to voice mail. Auto attendant: NINE ZERO ZERO. IS UNAVAILABLE. TO DIAL ANOTHER EXTENSION, PRESS 1. Just like that. And we can adjust that menu as well.</p>
				<p>So that's how we set up a very basic call queue that lands into a <a href="https://www.fastmetrics.com/support/cloud-phone-service-check-voicemail/" target="_blank" class="orange_link" title="voice mail inbox">voice mail inbox</a>. There is a typical use case that people come across, in that they have a <a href="techsupport.php" class="orange_link" title="Support">Support</a> or Sales Team of 10 or 20 users or something and they want to <a href="https://www.fastmetrics.com/support/cloud-phones-simultaneous-ring/" target="_blank" class="orange_link" title="ring all of those people">ring all of those people</a>. And if for some reason, no one answers that call, they want to ring a manager's phone or maybe a backup group of people.</p> 
				<p>So, if we look at our list here, it would look something like this. This might be our <a href="mailto:sales@fastmetrics.com" class="orange_link" title="Sales Team">Sales Team</a> and we're going to ring these guys for 30 seconds or some amount of time, and then we're going to fall over to our Manager, who is going to clean up the rest of the calls. And if that person doesn't pick up, we're going to roll over into voice mail.</p> 
				<p>So, to keep thing short here, we're going to have these guys ring for 10 seconds. Let's have this person ring for 5 seconds. So what's going to happen is it's going to ring for just 10 seconds on these 2 phones....let's change that to 10 seconds....and then it's going to start ringing this phone, in addition to these two phones. So from 0 - 10 seconds it's going to ring those phones from 10 seconds to 20 seconds, it's going to ring all 3 phones.</p>
				<p>So the way we set that up is we go back into our queue and hit edit queue. Come to Agents to ring initially, Agents to add after time out. So the way that we set this 10 seconds is to have the Agent ring timeout to 10 seconds. Agents to ring initially, so if we have our list; 1, 2, 3 - we want the first 2 people to ring initially and have that set to 2. And Agents to add after timeout, is how many more people we want to add after that. We just want to add one person.</p> 
				<p>So, if we wanted to add, if this list went on 4, 5, 6. We could say hey, ring four more people and it's going to get us 3, 4, 5 and 6. Just like that. But for now, let's just tick that and click save. If we bring up this interface here, we'll see who's actually ringing. So there we go, we're ringing these 2 guys and then it'll bring on the Manager. Auto attendant: NINE ZERO ZERO IS UNAVAILABLE.</p> 
				<p>We had that timeout kick in first, so we'll adjust that to go a little longer. So what happened there is, before it can fall over to the next person, we hit that 10 seconds. So let's make that 20 seconds. Now it's updated. Go back to call queues, double check everything here....so 10 seconds, it's going to ring these two for 10 seconds, then ring them for 10 seconds. So at 20 seconds it's going to kick out.</p> 
				<p>So that looks good and let's try that again. So there we go. And now our other phone just went off. Auto attendant: NINE ZERO ZERO IS UNAVAILABLE. And there we go, we're in the voice mail. So that's how you set up a tiered linear call queue.</p> 
				<p>The other options we can get into here, if you are going to allow your agents to log in and out of the queue, it allows them to...so if say John went to go to lunch or something, we can actually remove him from the queue, so it skips over him in line.</p> 
				<p>If everybody goes home for the day, eventually you end up with nobody able to take calls, so that's where this toggle is very useful. If there's no agents around and everybody's logged out and you have this set to yes, users will automatically skip going to the queue and go directly into your no answer rule. So right now we have it set to voice mail. So if everybody is logged out, it will go directly to voice mail.</p> 
				<p>This next setting goes hand in hand with that, to log out an agent on a missed call. So if somebody gets offered a call and they don't answer it, we can log them out automatically. So that's usually used if you close up for the day and somebody leaves themselves logged in, once they miss one call, they will be logged out. So if we want to see those two in action, the first call I'm going to make in here is going to actually log these guys out, so they can see them go grey, once they miss that call.</p> 
				<p>And the second call will actually go straight to voice mail, because there's not going to be anybody available. Ok. So now that person has logged out, which is what the grey represents. And now, that person's logged out. And now they're all logged out. Auto attendant: NINE ZERO.</p>  
				<p>So right now, everybody's logged out, until they log back in manually. They can do this either with the web interface, or use a star code. So if we call in right now, with nobody available, Auto attendant: NINE ZERO IS UNAVAILABLE. It goes directly to voice mail. And as the admin, we can also make sure they're set back online and that'll bring them back on....and you'll see it says available.</p>
				<p>And one last setting to go over here is the Max queue length. If every one of your agents is on the phone, the queue starts getting added to. So if you want to keep your queue to a certain level, or a certain length, you can set it here. So what this means is, if everybody's on the phone, we're going to let 10 people sit in that queue. And the 11th person that calls in, if there's 10 people still sitting there, is going to follow your Forward busy rule.</p> 
				<p>So, if we set this to 1 and click save...and I'm going to log a couple of these guys out, so we can see it. Ok, now we come back over to our user to set up that rule...the busy rule. We'll also send that to voice mail.</p> 
				<p>Ok, so what I'm going to need to do, is actually call them 3 times. So I need to call in and make this person busy...Agent Matt, then I need to call in one more time, that person is going to sit in the queue and then that third person, is going to be the 2nd caller, the 2nd person in the queue, which we're not going to allow. Because we have our max queue length set to 1.</p>
				<p>So let me make those calls. Ok, so we have 2 calls in there. 1 is in the queue. Auto attendant: NINE ZERO ZERO IS UNAVAILABLE. And then this one here, this is our other call which is going straight to voice mail.</p>
				<p>So that's all the settings we have available. The other 2 that you're going to see here, is max time. So what this does is basically the same thing that the timeout back on the user. So what we usually tell you to do is leave it at unlimited. Expected max wait time is going to be a feature that we're hoping to get in very soon, but for right now, just leave it as unlimited as well.</p>
				<p>And that is all there is to, linear queues in the <a href="cloud-based-pbx-service.php" title="metricPHONE system" class="orange_link">metricPHONE system</a>.</p>
				<p class="text-center"><a class="btn" data-toggle="modal" data-target="#contact">Contact Us</a></p>
			</div>
		</div>
		
	</article>
</section>		
		
<?php include("inc/footer.php"); ?>

</body>
</html>