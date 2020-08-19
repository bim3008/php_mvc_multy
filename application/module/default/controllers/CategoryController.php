<?php
class CategoryController extends FontendController
{

	public function indexAction()
	{
		$this->_view->listItems  	   = $this->_model->listItems($this->_arrParam);
		$this->_view->getBookInCate    = $this->_model->listItems($this->_arrParam,['task'=>'book-in-cate']);
		$this->_view->getCatName       = $this->_model->inforItem($this->_arrParam,['task'=>'get-cat-name']);
		
		$title = !empty($this->_view->getCatName) ? URL::filterURL($this->_view->getCatName) : 'Danh mục' ;
		$this->_view->setTitle($title);
		$this->_view->render($this->_arrParam['controller'] .DS.'index');
	}	
	
}
