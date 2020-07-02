<?php
class UserController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/adminlte/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	public function indexAction(){

		$this->_view->setTitle('User');
		//$this->_view->appendCSS(array('user/css/abc.css'));
		// $this->_view->appendJS(array('user/js/test.js'));
		$this->_view->render('user/index') ;				
								
													
	 }
	
	public function logoutAction(){
		echo '<h3>' . __METHOD__ . '</h3>';
		$this->_view->setTitle('Logout');
		$this->_view->appendJS(array('user/js/test.js'));
		$this->_view->render('user/logout', true);
	}
}