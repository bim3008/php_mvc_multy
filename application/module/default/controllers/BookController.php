<?php
class BookController extends Controller
{
	public function __construct($arrParam)
	{
		parent::__construct($arrParam);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function indexAction()
	{
		$this->_view->setTitle("List Book");
		$this->_view->getBookInCate    = $this->_model->listItems($this->_arrParam,array('task'=>'book-in-cate'));
		$this->_view->getNewBook       = $this->_model->listItems($this->_arrParam,array('task'=>'get-new-book'));
		$this->_view->getFeaturedBook  = $this->_model->listItems($this->_arrParam,array('task'=>'get-featured-book'));
		$this->_view->getCatName       = $this->_model->inforItem($this->_arrParam,array('task'=>'get-cat-name'));
		$this->_view->render($this->_arrParam['controller'] .DS.'index');
	}	
	public function detailsAction()
	{	
		$id = is_numeric($this->_arrParam['id']) ;
		if(empty($id) || $id == false ){
			URL::redirect('default','error','index');
		}
		$this->_view->setTitle("Chi tiết");
		$this->_view->getBookDetails  = $this->_model->listItems($this->_arrParam,array('task'=>'get-details-book'));
		$this->_view->getBookReletive = $this->_model->listItems($this->_arrParam,array('task'=>'get-reletive-book'));
		$this->_view->render($this->_arrParam['controller'] .DS.'details');
	}	
	
}