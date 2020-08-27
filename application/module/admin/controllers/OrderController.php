<?php
class OrderController extends AdminController
{
	public function indexAction(){
		$this->_view->setTitle(ucfirst($this->_arrParam['controller']));
		$this->_view->listItems      		= $this->_model->listItems($this->_arrParam,null);
		// $this->_view->pagination        	= new Pagination($this->_view->countItems[0]['total'], $this->_pagination);
		$this->_view->render($this->_arrParam['controller'] . DS . 'index');
	}
	public function userAction(){
		$this->_view->setTitle( 'View ' .ucfirst($this->_arrParam['action']));
		$this->_view->listItems      		= $this->_model->listItems($this->_arrParam,['task' => 'view-user']);
		$this->_view->render($this->_arrParam['controller'] . DS . 'user');
	}
	public function changestatusAction(){
		$this->_model->changeStatus($this->_arrParam,null);
		URL::redirect('admin','order','index') ;
	}
}
