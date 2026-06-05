<?php
if(isset($_GET) && !empty($_GET)){
    $company  = isset($_GET["company-name"]) ? $_GET["company-name"] : '';
    $name     = isset($_GET["name"]) ? $_GET["name"] : '';
    $email    = isset($_GET["email"]) ? $_GET["email"] : '';
    $services = isset($_GET["services"]) ? $_GET["services"] : '';
    $phone    = isset($_GET["phone"]) ? $_GET["phone"] : '';
    $message  = isset($_GET["message"]) ? $_GET["message"] : '';
    
    // ✅ Page URL (form submit source)
    $source = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct or Unknown';

    // ---------- Send to API ----------
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://www.salesnayak.com/API/AddLead',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
          'Mobile' => $phone,
          'Name' => $name,
          'Email' => $email,
          'CompanyName' => $company,
          'LeadTypeCode' => '273992',
          'LeadValue' => '0',
          'Tax' => '0',
          'Discount' => '0',
          'Companycode' => '640297',
          'LeadStageCode' => '23200',
          'LeadStatus' => '21892',
          'LeadSourceCode' => '13791',

          // ✅ Page URL added into remarks (IMPORTANT for spam tracking)
          'remarks' => 'Source Page: '.$source
      ),
      CURLOPT_HTTPHEADER => array('Cookie: MyTimeZone=India Standard Time'),
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    // ---------- Send Email ----------
    $ToEmail = 'business@aadiushmaa.com, kulwant.k@woodboxdigital.com'; 
    $EmailSubject = 'New Enquiry from Aadiushmaa Engineers Pvt. Ltd.'; 

    $mailheader  = "From: business@aadiushmaa.com\r\n";  
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    $MESSAGE_BODY  = "<h4>User Details for Enquiry</h4><br>";
    $MESSAGE_BODY .= "Your Company Name: ".$company."<br><br>"; 
    $MESSAGE_BODY .= "Your Name: ".$name."<br><br>"; 
    $MESSAGE_BODY .= "Your Email: ".$email."<br><br>"; 
    $MESSAGE_BODY .= "Your Services: ".$services."<br><br>"; 
    $MESSAGE_BODY .= "Your Number: ".$phone."<br><br>"; 
    $MESSAGE_BODY .= "Your Message: ".nl2br($message)."<br><br>"; 

    // ✅ Page URL also added in email
    $MESSAGE_BODY .= "<b>Request Page (Source):</b> ".$source."<br>"; 

    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

    echo '<script language="javascript">window.location.href="thank-you.php";</script>';
}
?>
