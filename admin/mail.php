<?php
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 mail('gaurav.ks88@gmail.com','test','hi testing',$headers);
 error_reporting(E_ALL ^ E_NOTICE);
echo error_get_last();
 ?>