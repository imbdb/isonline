<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('facebook.php');
require_once 'lib/Unirest.php';

  $facebook = new Facebook(array(
       'cookie' => true,
 'appId' => '1407498822824763',
    'secret' => '8f7d8b6206aa71e7a89bf82ea2889a7f',
   ));   

$facebook->setAccessToken('CAAUAHNtbMzsBABFKwtemd8tyrxqehMfUTxeUlFux5aneAwyYXwhDriTOySeDZC34cAvZAlpgzzlDbpXlljiqm8s6l2xLKtvZCCA8vGPcSYC3zZArg5kaWqaF8uWWnvuwvgya9M27nAnKkauYqqmZCysGHJfHsdarZBF67oC9ninIbpHa8iWZBSO');
 $fql = "select online_presence from user where uid in (select uid2 FROM friend WHERE uid1 = 100001545172176)  and uid=100001545172176";

  $param  =   array(
      'method'    => 'fql.query',
      'access_token' => 'CAAUAHNtbMzsBABFKwtemd8tyrxqehMfUTxeUlFux5aneAwyYXwhDriTOySeDZC34cAvZAlpgzzlDbpXlljiqm8s6l2xLKtvZCCA8vGPcSYC3zZArg5kaWqaF8uWWnvuwvgya9M27nAnKkauYqqmZCysGHJfHsdarZBF67oC9ninIbpHa8iWZBSO',
      'query'     => $fql,
      'callback'  => ''
);
$response   =   $facebook->api($param);


$file = "st.txt";

$sta = $response[0]['online_presence'];

$fd = file_get_contents($file);
echo($fd."\n");
echo($sta);

if ( $fd <> $sta)
{
	file_put_contents($file,$sta);
if($sta = "active")
{
$res = Unirest::get(
 "https://site2sms.p.mashape.com/index.php?msg=On&phone=9429920346&pwd=58887&uid=9429920346",
  array(
    "X-Mashape-Authorization" => "x86f4rGZ8Xm8Mv0lZzlyPNnybhMACJmj"
  ),
  null
);

}
if($sta = "offline")
{
$res = Unirest::get(
 "https://site2sms.p.mashape.com/index.php?msg=Off&phone=9429920346&pwd=58887&uid=9429920346",
  array(
    "X-Mashape-Authorization" => "x86f4rGZ8Xm8Mv0lZzlyPNnybhMACJmj"
  ),
  null
);
	}
}

?>
