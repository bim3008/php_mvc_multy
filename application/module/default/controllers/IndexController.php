<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function indexAction(){
		$this->_view->setTitle('Trang chủ');
		$this->_view->render($this->_arrParam['controller'] . DS . 'index');
	}
	public function loginAction(){
		$this->_view->setTitle('Đăng nhập');
		$this->_view->render($this->_arrParam['controller'] . DS . 'login');
	}
	public function registerAction(){
		$this->_view->setTitle('Đăng ký');
		$this->_view->render($this->_arrParam['controller'] . DS . 'register');
	}

}