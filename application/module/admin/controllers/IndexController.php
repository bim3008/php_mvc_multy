<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/adminlte/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function dashbroadAction(){			
		
		$this->_view->count = $this->_model->countItems();
		$this->_view->render('index/dashbroad');
		
		
	}
	
	public function indexAction()
	{
		$this->_view->render('user/dashbroad');
		
	}
} 