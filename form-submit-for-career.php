<?php 
    $ToEmail = 'business@aadiushmaa.com'; 
    $EmailSubject = 'New Enquiry from Aadiushmaa Engineers Pvt. Ltd.'; 
    $MESSAGE_BODY .= "<h4>User Details for Enquiry</h4><br>";
    $mailheader .= "from: ".$_GET["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY .= "Your Name: ".$_GET["name"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Email : ".$_GET["email"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Position : ".$_GET["position"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Number : ".$_GET["phone"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Resume : ".$_GET["files"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Message : ".nl2br($_GET["message"])."<br><br>"; 
    $MESSAGE_BODY .= "<b>Request Page :</b>".$_SERVER['HTTP_REFERER']."<br>";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
<script language="javascript">
window.location.href="thank-you.php";
</script>