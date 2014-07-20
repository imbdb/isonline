<?php
  require_once('facebook.php');
require_once 'lib/Unirest.php';

  $facebook = new Facebook(array(
       'cookie' => true,
 'appId' => '1407498822824763',
    'secret' => '8f7d8b6206aa71e7a89bf82ea2889a7f',
   ));   

$facebook->setAccessToken('CAAUAHNtbMzsBAG36w8WUSeGYJOUhhJitGkkkz6dsEmKvOUAP8DYFMBaOjii7ucr6694kIZAArdfTyLKh6DrEFjVhVFVnSl7k8JpvB8XSWbsbunvLlDl4ZBAZBxnwmexA1Pyjq7joZAD4qUvK4FAOlu2yNoQjAwrZAEXGoZBnYquBjVzm1ZAJkyE');

$access_token = 'CAAUAHNtbMzsBAG36w8WUSeGYJOUhhJitGkkkz6dsEmKvOUAP8DYFMBaOjii7ucr6694kIZAArdfTyLKh6DrEFjVhVFVnSl7k8JpvB8XSWbsbunvLlDl4ZBAZBxnwmexA1Pyjq7joZAD4qUvK4FAOlu2yNoQjAwrZAEXGoZBnYquBjVzm1ZAJkyE';








$fid=file_get_contents("https://graph.facebook.com/me/friends?access_token=".$access_token);

echo($fid);
?>
