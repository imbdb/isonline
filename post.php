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

$facebook->setAccessToken('CAAUAHNtbMzsBAG36w8WUSeGYJOUhhJitGkkkz6dsEmKvOUAP8DYFMBaOjii7ucr6694kIZAArdfTyLKh6DrEFjVhVFVnSl7k8JpvB8XSWbsbunvLlDl4ZBAZBxnwmexA1Pyjq7joZAD4qUvK4FAOlu2yNoQjAwrZAEXGoZBnYquBjVzm1ZAJkyE');



$attachment =  array(
                              'access_token'=>'CAAUAHNtbMzsBAG36w8WUSeGYJOUhhJitGkkkz6dsEmKvOUAP8DYFMBaOjii7ucr6694kIZAArdfTyLKh6DrEFjVhVFVnSl7k8JpvB8XSWbsbunvLlDl4ZBAZBxnwmexA1Pyjq7joZAD4qUvK4FAOlu2yNoQjAwrZAEXGoZBnYquBjVzm1ZAJkyE',
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
