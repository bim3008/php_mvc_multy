<?php
class CategoryController extends FontendController
{

	public function indexAction()
	{
		$this->_view->setTitle("Danh mục");
		$this->_view->listItems  = $this->_model->listItems($this->_arrParam);
		$this->_view->render($this->_arrParam['controller'] .DS.'index');
	}	
	
}
