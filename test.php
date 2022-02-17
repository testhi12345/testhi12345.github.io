<?php
$to = "brightlylearning@gmail.com";
$subject = "Go Away!";
$txt = "Now I am a hacker. I can email from the pipecleaner world!";
$headers = "From: iamthebestest@pipecleanerworld.piw" . "\r\n" .
"CC: htest577@gmail.com";

mail($to,$subject,$txt,$headers);
?>
