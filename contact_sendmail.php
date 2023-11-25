<?php
     if(isset($_POST['btnContact']))
	   {
		$name	=	$_REQUEST['name'];
	 	$email	=	$_REQUEST['email'];
	 	$subject =	$_REQUEST['subject'];
	 	$msg     =  $_REQUEST['message'];
	 
	    $message = '<html><body>';
		$message.='<table border="0" width="600px" style="font-size:14px; text-align:center">';
		$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td colspan="2">Contact Information</td></tr>';
		$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Name</td><td>'.strip_tags($name).'</td></</tr>';
		$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Email</td><td>'.strip_tags($email).'</td></</tr>';
		$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Subject</td><td>'.strip_tags($subject).'</td></</tr>';
		$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Message</td><td>'.strip_tags($msg).'</td></</tr>';
		$message.='</table>';
        $message.='</body></html>';
		
		
		$to=$email;
	 	$from='arunkumarak199685@gmail.com';
	 	$subject='Contact Infromation';
	 	$headers = "From: " . $from . "\r\n";
	 	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	 	$headers .= "MIME-Version: 1.0\r\n";
	 	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			
		   $retval = mail ($to,$subject,$message,$headers);
		   if($retval==true)
		   {
			  echo "Message Send Successfully";
		   }
			else
		   {
			  echo "failed";
		   }
	   }

 ?>