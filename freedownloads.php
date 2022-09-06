<?php
$title="Free Business Services Downloads - Fastmetrics Business ISP";
$desc="Fastmetrics provides a range of free business downloads here to assist with your Email, MAPI, soft phones, VPN access, remote back up and more.";
$h2="Fastmetrics, Inc. Business ISP";
$h1="Free Business Downloads";
$form_title="Contact Us";
$right_menu_title="Related Business Services";
$right_menu_li = array(
 "fiber-optic-internet.php", "Fiber Optic Internet",
 "fiber-optic-internet-availability-map.php", "Fiber Internet Map",
 "portphonenumbers.php", "Port Numbers",
 "sitemap.php", "Sitemap"
);
include("includes/Mobile_Detect.php");
$detect = new Mobile_Detect;
$robots="no";
include("includes/head.php");
include("includes/header.php");
?>

	<div class="content-bloc downloads">
		<h3>Free downloads for your business.</h3>
		<div class="half">
        <p><strong>VPN Client</strong></p>
        <ul>
          <li class="style1" style="padding-bottom: 5px"><strong>email support@fastmetrics.com for access</strong><br /></li>
          <li><a href="downloads/vpnclient/vpn-client-guide.pdf">Windows Installation Guide</a></li>
          <li><a href="downloads/vpnclient/vpnclient-win-msi-5.0.07.0290-k9.exe">Windows 32 bit - v. 5.0.07.0290-k9</a></li>
          <li><a href="downloads/vpnclient/vpnclient-winx64-msi-5.0.07.0290-k9.exe">Windows 64 bit - v. 5.0.07.0290-k9</a></li>
          <li><a href="downloads/vpnclient/MacOSX/anyconnect-all-2.4.1012-k9.zip">Any connect VPN (Mac OS and Windows 7)</a></li>
          <li><a href="downloads/vpnclient/vpnclient-win-msi-5.0.06.0160-k9.exe">Windows (XP/Vista) v. 5.0.06.0160-k9 (old)</a></li>
          <li><a href="downloads/vpnclient/Windows&nbsp;7&nbsp;64bit/vpnclient-winx64-msi-5.0.07.0290-k9.exe">Windows 7 (64-bit) v. 5.0.07.0290-k9 (old)</a></li>
          <li><a href="downloads/vpnclient/linux/vpnclient-linux-x86_64-4.8.02.0030-k9.tar.gz">Linux V. 4.8.02.0030-k9</a></li>
          <li><a href="downloads/vpnclient/MacOSX/anyconnect-macosx-i386-3.0.5080-k9.pkg">Mac OS X i386 3.0.5080-k9</a></li>
          <li><a href="downloads/vpnclient/vpnclient-win-msi-5.0.07.0410-k9.exe">VPN for Windows 8 32 bit<br>(secure boot in the BIOS might have to be disabled)</a></li>
          <li><a href="downloads/vpnclient/vpnclient-winx64-msi-5.0.07.0440-k9.exe">VPN for Windows 8 64 bit</a></li>
        </ul>
        <p><strong>Enterprise Mail :: MAPI Connector</strong></p>
        <ul>
          <li><a href="downloads/mapi/CGatePro-MAPI-Intel-1.54.0.6.zip">Download MAPI connector</a></li>
          <li><a href="http://www.fastmetrics.com/downloads/mapi/MAPI-GUIDE.pdf">Configure MAPI connector</a></li>
          <li><a href="http://kb.fastmetrics.com/index.php/email/262-mapilandingpage" title="">Learn more about MAPI</a></li>
          <li><a href="http://kb.fastmetrics.com/smartphones/132-iphone-email-set-up" title="How to set up email on iPhone">How to set up email on iPhone</a></li>
        </ul>
        <p><strong>Enterprise Mail :: Pronto Pro</strong></p>
        <ul>
          <li><a href="http://get.adobe.com/air/">Install Adobe AIR (required for Pronto Pro)</a></li>
          <li><a href="http://www.fastmetrics.com/downloads/pronto/pronto4.exe">Install Pronto Pro</a></li>
          <li><a href="http://kb.fastmetrics.com/index.php/email/125-installprontoemailclient" title="">Learn more about Pronto!</a></li>
         </ul>
		</div>
		<div class="half">
		  <p><strong>Softphones</strong></p>
        <ul>
          <li><a href="http://www.counterpath.com/x-lite-download.html">X-Lite Free Softphone Download </a></li>
          <li><a href="http://kb.fastmetrics.com/index.php/phones/215-configurexlite4">X-Lite Install Instructions</a></li>
          <li><a href="http://kb.fastmetrics.com/smartphones/363-briaforiphonesetup" title="Bria for iPhone" target="_blank">Bria for iPhone</a></li>
          <li><a href="http://kb.fastmetrics.com/business-phones/350-configurexlite5" title="X-Lite 5 Install Instructions" target="_blank">X-Lite 5 Install Instructions</a></li>
          <li><a href="http://kb.fastmetrics.com/business-phones/215-configurexlite4" title="X-Lite 4 Install Instructions" target="_blank">X-Lite 4 Install Instructions</a></li>
        </ul>
        <p><strong>Remote Backup Client</strong></p>
        <ul>
          <li><a href="downloads/backup/fm-remotebkup-v11.exe">Remote Backup Client v11(Win)</a></li>
        </ul>
        <p><strong>Outlook TSP File</strong></p>
        <ul>
          <li><a href="downloads/outlook/32bit/siptapi.tsp" title="">32-bit tsp file</a></li>
          <li><a href="downloads/outlook/64bit/siptapi.tsp" title="">64-bit tsp file</a></li>
        </ul>
        <p><strong>Polycom Phone Manuals &amp; Support</strong></p>
        <ul>
          <li><a href="http://kb.fastmetrics.com/business-phones/303-soundpoint335userguide" title="Polycom IP 335 Manual" target="_blank">Polycom IP 335 Manual</a></li>
          <li><a href="http://kb.fastmetrics.com/business-phones/176-soundpointip430sip" title="Polycom IP 430 Manual" target="_blank">Polycom IP 430 Manual</a></li>
          <li><a href="http://kb.fastmetrics.com/business-phones/217-soundpoint650userguide" target="_blank">Polycom IP 650 Manual</a></li>
          <li><a href="http://kb.fastmetrics.com/business-phones/345-polycom6000userguide" target="_blank">Polycom SoundStation 6000 Manual</a></li>
        </ul>
		</div>
	</div>
	
<?php
include("includes/aside.php");
include("includes/footer.php");
?>
		
</body>
</html>