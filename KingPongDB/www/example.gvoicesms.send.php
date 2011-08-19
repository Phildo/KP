<?php

// arvin@sudocode.net
// url  : http://sudocode.net/article/66/sending-a-google-voice-sms-using-php/
// date: December 28, 2010

require_once 'class.xhttp.php';

// Set account login info
$data = array();
$data['post'] = array(
  'accountType' => 'GOOGLE',
  'Email'       => 'kingpongtable@gmail.com',
  'Passwd'      => 'bitchwig',
  'service'     => 'grandcentral',
  'source'      => 'sudocode.net-example-1.0' // Application's name, e.g. companyName-applicationName-versionID
);
 
$response = xhttp::fetch('https://www.google.com/accounts/ClientLogin', $data);

if(!$response['successful']) {
    echo 'response: '; print_r($response);
    die();
}

// Extract Auth
preg_match('/Auth=(.+)/', $response['body'], $matches);
$auth = $matches[1];
// You can also cache this auth value for at least 5+ minutes

// Erase POST variables used on the previous xhttp call
$data['post'] = null;

// Set Authorization for authentication
// There is no official documentation and this might change without notice
$data['headers'] = array(
    'Authorization' => 'GoogleLogin auth='.$auth
);

$response = xhttp::fetch('https://www.google.com/voice', $data);

if(!$response['successful']) {
    echo 'response: '; print_r($response);
    die();
}

// Extract _rnr_se | This value does not change* Cache this value
preg_match("/'_rnr_se': '([^']+)'/", $response['body'], $matches);
$rnrse = $matches[1];

// $data['headers'] still contains Auth for authentication

// Set SMS options
$data['post'] = array (
    '_rnr_se'     => $rnrse,
    'phoneNumber' => '+1'.$_GET['phone'], //'+12629230980', // country code + area code + phone number (international notation)
    'text'        => 'This is a test SMS sent from PHP using Google Voice!',
    'id'          => ''  // thread ID of message, GVoice's way of threading the messages like GMail
);

// Send the SMS
$response = xhttp::fetch('https://www.google.com/voice/sms/send/', $data);

// Evaluate the response
$value = json_decode($response['body']);

if($value->ok) {
    echo "SMS message sent! ({$data[post][phoneNumber]}: {$data[post][text]})";
} else {
    echo "Unable to send SMS! Error Code ({$value->data->code})\n\n";
    echo 'response: '; print_r($response);
}

?>