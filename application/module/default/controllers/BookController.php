<?php
class BookController extends FontendController
{

	public function indexAction()
	{
		$this->_view->setTitle("Sách");
		$this->_view->getBookInCate    = $this->_model->listItems($this->_arrParam,['task'=>'book-in-cate']);
		$this->_view->getNewBook       = $this->_model->listItems($this->_arrParam,['task'=>'get-new-book']);
		$this->_view->getFeaturedBook  = $this->_model->listItems($this->_arrParam,['task'=>'get-featured-book']);
		$this->_view->getCatName       = $this->_model->inforItem($this->_arrParam,['task'=>'get-cat-name']);
		$this->_view->render($this->_arrParam['controller'] .DS.'index');
	}	
	public function detailsAction()
	{	
		$id = is_numeric($this->_arrParam['book_id']) ;
		if(empty($id) || $id == false){
			URL::redirect('default','error','index');
		}
		$this->_view->setTitle("Chi tiết");
		$this->_view->getBookDetails  = $this->_model->listItems($this->_arrParam,['task'=>'get-details-book']);
		$this->_view->getBookReletive = $this->_model->listItems($this->_arrParam,['task'=>'get-reletive-book']);
		$this->_view->render($this->_arrParam['controller'] .DS.'details');
	}	
	
}