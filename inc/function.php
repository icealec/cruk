<?php
////////////////////////////////////////////////////////////////////////////////////
// send email
function sendEmail($content,$emailTo,$subject,$Bcc){
	$strFrom = "From: alec@iceimages.co.za \r\nContent-type: text/html; charset=us-ascii";
	
	$message = '<!DOCTYPE HTML><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    			<title>CRUK Our Heroes</title>
				<style type=text/css>
					body,div {background:#eaedf2;margin:0px;padding:0px}
					.emailText {font-size:9pt;font-family:Arial;line-height:12pt;color:#2e008b;background:#fff;width:560px;min-height:360px;padding:20px;text-align:left}
					img{display:block}
				</style></head><body><div align="center"><div class="emailText">';
				
	$message .= $content;
	$message .= "</div></div></body></html>";
	
	if (mail($emailTo, $subject, $message, $strFrom)){
		$reply = "success";
	} else {
		$reply = "fail";
	}
	return $reply;
}
////////////////////////////////////////////////////////////////////////////////////
// to be used if session declared before class
function fixObject (&$object){
	if (!is_object ($object) && gettype ($object) == 'object')
		return ($object = unserialize (serialize ($object)));
	return $object;
}
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
?>