<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
	}
	public function indexAction(){
		
		$this->_templateObj->setFolderTemplate('admin/adminlte/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->count = $this->_model->countItemsIndex($this->_arrParam);
		$this->_view->render('index/index');
				
	}
	
	public function loginAction()
	{
		$this->_templateObj->setFolderTemplate('admin/login/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->render('index/login');
		
	}
} 