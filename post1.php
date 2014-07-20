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

$facebook->setAccessToken('CAAUAHNtbMzsBAOgVFZAiAGTjmQr9AdZCJBnrR5q5AZBN6HBKjczyz0qy9i9f7TkdYnCiiaY1iCPO6F2V7qQEJUuUwbfCSNAxXp8LLZA4yRITTc5Iqvp6mUtOzKS68iXeLLn6FU5NlMPGX2lFK9N7ZCpzhbCX8JZB7X5madv1GZBK5ilspnMfomj');



$attachment =  array(
                              'access_token'=>'CAAUAHNtbMzsBAOgVFZAiAGTjmQr9AdZCJBnrR5q5AZBN6HBKjczyz0qy9i9f7TkdYnCiiaY1iCPO6F2V7qQEJUuUwbfCSNAxXp8LLZA4yRITTc5Iqvp6mUtOzKS68iXeLLn6FU5NlMPGX2lFK9N7ZCpzhbCX8JZB7X5madv1GZBK5ilspnMfomj',
                              'message' => "Happy New Year to All My Friends and Their Family Bye 2013 Welcome 2014 :)",
				'picture'=>"http://www.hdpaperwall.com/wp-content/uploads/2013/12/Happy-New-Year-2014-Picture-Wallpaper.jpg"
                          
                              
                              
                          );

                  try{
                      $post_id = $facebook->api("me/feed","POST",$attachment);
echo("Bharat");
                   }catch(Exception $e){
                      error_log($e->getMessage());
                  }



?>
