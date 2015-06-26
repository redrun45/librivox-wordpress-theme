<?php
/*********************************************************
* Conditional functions for mobile devices - Mobble plugin 
**********************************************************/
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";

/***************************************************************
* Function is_iphone
* Detect the iPhone
***************************************************************/

function is_iphone() {
	global $useragent;
	return(preg_match('/iphone/i',$useragent));
}

/***************************************************************
* Function is_ipad
* Detect the iPad
***************************************************************/

function is_ipad() {
	global $useragent;
	return(preg_match('/ipad/i',$useragent));
}

/***************************************************************
* Function is_ipod
* Detect the iPod, most likely the iPod touch
***************************************************************/

function is_ipod() {
	global $useragent;
	return(preg_match('/ipod/i',$useragent));
}

/***************************************************************
* Function is_android
* Detect an android device. They *SHOULD* all behave the same
***************************************************************/

function is_android() {
	global $useragent;
	return(preg_match('/android/i',$useragent));
}

/***************************************************************
* Function is_blackberry
* Detect a blackberry device 
***************************************************************/

function is_blackberry() {
	global $useragent;
	return(preg_match('/blackberry/i',$useragent));
}
?>