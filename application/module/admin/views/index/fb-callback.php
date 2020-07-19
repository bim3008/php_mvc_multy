<?php
require_once 'config.php' ;

//require_once '../php_mvc_multy/libs/Session.php' ;
if (!session_id()) {
    session_start();
}

// session_status() ;
// $_SESSION['FBRLH_state']=$_GET['state'];
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

    if(!$accessToken)
    {
        URL::redirect('index','index','login') ;
        exit();
    }

    $oAuth2Client = $FB->getOAuth2Client();
    if(!$accessToken ->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken) ;
    
    $response = $FB->get("me?fields=id,name,email,location",$accessToken->getValue()) ;

    $userData = $response->getGraphNode()->asArray() ;

    // $_SESSION('user') ;
  //  Session::set('userData',$userData);
    $_SESSION['user'] =  $userData ;
    // Session::set('customer_id',$userData['id']) ;
    //Session::set('accesstoken',$accessToken);
    header('location:http://localhost/php_mvc_multy/index.php?module=admin&controller=index&action=index') ;
   // header('location:index') ;
    exit();


?>