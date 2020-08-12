<?php

require_once "Session.php" ;
require_once 'config.php' ;
if (!session_id()) {
    session_start();
}
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}
    try
    {
        $accessToken = $helper->getAccessToken() ;
    } catch(\Facebook\Exceptions\FacebookResponseException $e){
        echo "Response Exceptions" . $e->getMessage() ;
        exit();
    } catch(\Facebook\Exceptions\FacebookSDKException $e){
        echo "SDK Exceptions" . $e->getMessage() ;
        exit();
    }
    if($accessToken == false)
    {
        header('location:http://localhost/php_mvc_multy/index.php?module=admin&controller=index&action=index') ;
        exit();
    }
    $oAuth2Client = $FB->getOAuth2Client();
    if(!$accessToken ->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken) ;
    $response = $FB->get("me?fields=id,name,email,location,picture",$accessToken->getValue()) ;
    $userData = $response->getGraphNode()->asArray() ;
    Session::set('loginFacebook',$userData);
    header('location:http://localhost/php_mvc_multy/index.php?module=admin&controller=index&action=index') ;
    exit();


?>