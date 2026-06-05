<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://salesnayak.com/API/AddComplaint',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('companycode=640297&Token=638448104984849082&mobile=phone&CompanyName=LeadTypeCode&name=name&email=email&address=address&product=products&model=_blank&make=_blank&Problem=Testing'),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
    $ToEmail = 'business@aadiushmaa.com'; 
    $EmailSubject = 'New Enquiry from Aadiushmaa Engineers Pvt. Ltd.'; 
    $MESSAGE_BODY .= "<h4>User Details for Enquiry</h4><br>";
    $mailheader .= "from: business@aadiushmaa.com\r\n";  
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY .= "Your Company Name: ".$_GET["company-name"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Name: ".$_GET["name"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Email : ".$_GET["email"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Number : ".$_GET["phone"]."<br><br>"; 
    $MESSAGE_BODY .= "Your Message : ".nl2br($_GET["message"])."<br><br>"; 
    $MESSAGE_BODY .= "<b>Request Page :</b>".$_SERVER['HTTP_REFERER']."<br>";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
<script language="javascript">
window.location.href="thank-you.php";
</script> 