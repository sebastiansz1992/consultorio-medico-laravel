<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class VideoCallController extends Controller
{
    public function accessToken () {
    
        $accountSid = env("TWILIO_ACCOUNT_SID");
        $apiKeySid = env("TWILIO_API_KEY_SID");
        $apiKeySecret = env('TWILIO_API_KEY_SECRET');

        $identity = uniqid();

        // Create an Access Token
        $token = new AccessToken(
            $accountSid,
            $apiKeySid,
            $apiKeySecret,
            3600,
            $identity
        );

        // Grant access to Video
        $grant = new VideoGrant();
        $grant->setRoom("Sala consultorio medico");
        $token->addGrant($grant);

        // Serialize the token as a JWT
        echo $token->toJWT();
        
    }
    
}
