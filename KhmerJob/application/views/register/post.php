<?php

 	if(isset($_POST['g-recaptcha-response']) && ($_POST['g-recaptcha-response'])){
		$secret= "6LegfhsUAAAAADC217--1gdIc0AeHHRPinyXjjFn";
		$ip="";/*$_SERVER['REMOTE_ADDE'];*/
		$captcha=$_POST['g-recaptcha-response'];
		$rsp="https://www.google.com/recaptcha/api/siteverify?secret=$secret&captcha=$captcha&remote$ip";
		$arr = json_decode($rsp,TRUE);
		echo "yes";
	}else{
		echo "No";
	}

 ?>