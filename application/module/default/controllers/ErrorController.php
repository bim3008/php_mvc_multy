<?php
class ErrorController extends FontendController{
	

	public function indexAction(){
		$this->_view->setTitle('Error');
		$this->_view->render($this->_arrParam['controller'] . DS . 'index',false);
	}

}