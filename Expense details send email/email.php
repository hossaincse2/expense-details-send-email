<?php
    
//$to  = 'shemon88@gmail.com,hossaincse2@gmail.com,nybsyshossain@gmail.com,accounting@blueshiftip.com'; // note the comma
$baseurl = 'http://blueshiftip.com/expense';

function emailSend($subject,$htmlContent){
    $to  = 'accounting@blueshiftip.com'; // note the comma
    
    // Set content-type header for sending HTML email
     
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

// Additional headers
$headers .= 'From: BlueShiftIp<expense@blueshiftip.com>' . "\r\n";
$headers .= 'Cc: welcome@example.com' . "\r\n";
$headers .= 'Bcc: welcome2@example.com' . "\r\n";
 

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
   echo  $successMsg = 'Your email has been sent successfully.';
else:
   echo $errorMsg = 'Email sending fail.';
endif;
}

function email_send_with_file($subject,$messages,$attachment){
$to = "accounting@blueshiftip.com";
$from = "expense@blueshiftip.com";
$file = $baseurl.'/'.$attachment;
$myAttachment = chunk_split(base64_encode(file_get_contents($attachment)));
 
$headers = "From: \"BlueShiftIp\" <expense@blueshiftip.com>\r\n" .
  "Repy-To: expense@blueshiftip.com\r\n" .
   "MIME-Version: 1.0\r\n" .
   "Content-Type: multipart/mixed; boundary= \"1a2a3a\"\r\n";
$body = "--1a2a3a\r\n" .
    "Content-Type: multipart/alternative; boundary= \"4a5a6a\"\r\n" .
     "--4a5a6a\r\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n" .
      "Content-Transfer-Encoding: 7bit\r\n" .
  "The attachment contains the log-files .\r\n" .
     "--4a5a6a\r\n" .
      "Content-Type: text/html; charset=\"iso-8859-1\"\r\n" .
       "$messages\r\n" .
    "--1a2a3a\r\n" .
     "Content-Type: application/zip; name=\"$attachment\"\r\n" .
     "Content-Transfer-Encoding: base64\r\n" .
     "Content-Disposition: attachment\r\n" .
  $myAttachment. "\r\n" .
  "--1a2a3a--";
 
   $success = mail($to, $subject, $body, $headers);
   if (!$success) {
  echo "Mail to " . $to . " is fail.";
   }else {
  echo "Your email has been sent successfully. ";
   }
}
?>