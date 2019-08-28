<?php


//----------------------Company Information---------------------

$comany_name = "Pathum Lanka Tours";
$website_name = "www.pathumlankatours.com";
$comConNumber = "+94 774 741 416";
$comEmail = "info@pathumlankatours.com";
$from = 'info@pathumlankatours.com';

//$comEmail = "info@islandwide.website";
//$from = 'info@islandwide.website';


//----------------------Visitor Information---------------------


$full_lname = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$subject = 'Tour Enquiry - Pathum Lanka Tours';
$subject2 = 'Thank You - Pathum Lanka Tours';

date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'];


include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $visitor_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$headers2 = "From: " . $from . "\r\n";
$headers2 .= "Reply-To: " . $comEmail . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// Sending mail

if (
        mail($comEmail, $subject, $company_message, $headers) &&
        mail($visitor_email, $subject2, $visitor_message, $headers2)) {

    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'correct';
    $response['msg'] = "Could not be sent your message";
    echo json_encode($response);
    exit();
} 


