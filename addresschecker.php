<?php
echo attFacilityCheck("365 main street","94105");

function attFacilityCheck($address,$zip){
	//three vars required: address, zip, and state
	//generate the state abbreviation from the zip code
	$z = file_get_contents("http://api.zippopotam.us/us/".$zip);
	$z_array = json_decode($z,true);
	//print_r($z_array);

	$ch_array["address"]	= $address;
	$ch_array["state"]	= $z_array["places"][0]["state abbreviation"];
	$ch_array["zip"]	= $zip;
	
	$ch_array["city"]	= "";
	$ch_array["submitted"]	= "1";
	$ch_array["blnIsBot"]	= "false";
	$ch_array["term"]	= "on";
	$ch_array["search"]	= "Search";
	$ch_array["selectadd"]	= "";
	
	$attform = "https://clec.att.com/facilitiescheck/facilities_chk.cfm";
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$attform);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_HEADER, true); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36"); 
	
	$ch_out = curl_exec ($ch);
	
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($ch_array));
	curl_setopt($ch, CURLOPT_REFERER, 'https://clec.att.com/facilitiescheck/facilities_chk.cfm');
	
	$ch_out = curl_exec ($ch);
	//print_r($ch_out);
	//parse the facility check results page, return only the results
	$dom = new DOMDocument;
	$internalErrors = libxml_use_internal_errors(true);
	
	$reply = "\n\nATT Facility Check:\n====================\n";
	$dom->loadHTML($ch_out);
	$cells = $dom->getElementsByTagName('td');
	foreach ($cells as $c){
		$text = $c->nodeValue;
		if(stristr($text,$ch_array["zip"])) $reply .= $text . "\n\n";
		else if (stristr($text,'LATA')) $reply .= $text . "\n\n";
	}
	return($reply);
}

?>
