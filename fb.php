<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  /*
  require_once('facebook.php');
require_once 'lib/Unirest.php';

  $facebook = new Facebook(array(
       'cookie' => true,
 'appId' => 'your app ID',
    'secret' => 'your app Secret',
   ));   

$facebook->setAccessToken('Access Token aquired from user');
 $fql = "select online_presence from user where uid in (select uid2 FROM friend WHERE uid1 = 'uid of friend')  and uid='uid of user'";

  $param  =   array(
      'method'    => 'fql.query',
      'access_token' => '',
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
	echo $sta;
}
*/
?>
