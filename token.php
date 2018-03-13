<?php
require_once('/path/to/vendor/autoload.php'); // Loads the library
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

// Substitute your Twilio AccountSid and ApiKey details
$accountSid = 'accountSid';
$apiKeySid = 'apiKeySid';
$apiKeySecret = 'apiKeySecret';

$identity = 'example-user';

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
$grant->setRoom('cool room');
$token->addGrant($grant);

// Serialize the token as a JWT
echo $token->toJWT();
