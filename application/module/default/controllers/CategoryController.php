<?php
class CategoryController extends Controller
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
		$this->_view->setTitle(ucfirst($this->_arrParam['controller']) );
		$this->_view->listItems  = $this->_model->listItems($this->_arrParam);
		$this->_view->topSelling = $this->_model->listItems($this->_arrParam,array('task'=>'top-selling'));
		$this->_view->render($this->_arrParam['controller'] .DS.'index');
	}
	
	
}
