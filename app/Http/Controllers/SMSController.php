<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SMSController extends Controller
{
    public function sendSMS()
    {
       
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilioPhoneNumber = getenv('TWILIO_PHONE_NUMBER');
     
        $client = new Client($sid, $token);
        

        $message = $client->messages->create(
            '+923154704013', // Receiver's phone number
            [
                'from' => $twilioPhoneNumber,
                'body' => 'Hello, this is a test SMS from your Laravel application!'
            ]
        );

        // You can handle the response here
        return "SMS sent successfully!";
    }
}
