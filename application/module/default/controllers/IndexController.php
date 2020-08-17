<?php
class IndexController extends FontendController{
	
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