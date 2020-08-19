<?php
// $linkOrder    = URL::createLink('default','user','order',['category_id'=> $value['category_id'],'book_id'=>$value['id']]) ;
	require_once 'define.php';
	require_once 'define_value.php';
	require_once 'define_notice.php';
	function __autoload($clasName){
		require_once LIBRARY_PATH . "{$clasName}.php";
	}
	Session::init() ;
	$bootstrap = new Bootstrap();
	$bootstrap->init();
